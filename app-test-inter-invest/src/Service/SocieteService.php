<?php

namespace App\Service;

use App\Entity\Societe;
use App\Entity\SocieteInfo;
use App\Repository\FormeJuridiqueRepository;
use App\Repository\SocieteRepository;
use Exception;
use Symfony\Component\HttpFoundation\Request;

class SocieteService
{
    /**
     * @var SocieteRepository
     */
    private $societeRepository;

    /**
     * @var FormeJuridiqueRepository
     */
    private $formeJuridiqueRepository;

    /**
     * SocieteService constructor.
     * @param SocieteRepository $societeRepository
     * @param FormeJuridiqueRepository $formeJuridiqueRepository
     */
    public function __construct(
        SocieteRepository $societeRepository,
        FormeJuridiqueRepository $formeJuridiqueRepository
    ) {
        $this->societeRepository = $societeRepository;
        $this->formeJuridiqueRepository = $formeJuridiqueRepository;
    }

    /**
     * @param Request $request
     *
     * Récupère les infos basiques de toutes les sociétés ou avec un filtre
     */
    public function societeList(Request $request): array
    {
        $query = $request->query;
        // Filtres
        $filterNom = $query->has('filterNom') ? $query->get('filterNom') : '';
        $filterSiren = $query->has('filterSiren') ? $query->get('filterSiren') : '';
        // Taille de la page
        $pageSize = -1;
        // Numéro de la page
        $page = -1;
        // Nombre de pages
        $pageTotal = -1;
        // Si la pagination est activée, récupère le nombre de pages
        if ($query->has('pageSize') && $query->has('page')) {
            $page = $query->get('page');
            $pageSize = $query->get('pageSize');

            $total = $this->societeRepository->countFilter($filterNom, $filterSiren);
            $pageTotal = ceil($total / $pageSize);
        }

        // Récupère les info
        $societeArray = $this->societeRepository->findAllBasic($page, $pageSize, $filterNom, $filterSiren);
        return [
            'societes' => $societeArray,
            'page' => $page,
            'pageTotal' => $pageTotal,
            'pageSize' => $pageSize,
            'filterNom' => $filterNom,
            'filterSiren' => $filterSiren
        ];
    }


    /**
     * @param int $id
     *
     * Récupère toutes les infos d'une société
     */
    public function societeGet(int $id): array
    {
        // Récupère la société
        $societe = $this->societeRepository->find($id);
        // Récupère les infos associées
        $societeInfo = $societe->getSocieteInfo();

        // Récupère la liste des version de la société
        $societeVersion = $societe->getSocieteVersionsSerialize();
        return [
            'id' => $id,
            'societeInfo' => $societeInfo->jsonSerialize(),
            'societeVersion' => $societeVersion
            ];
    }

    /**
     * @param Request $request
     *
     * Enregistre une société
     * Return true en cas de succès ou false sinon
     */
    public function societeAdd(Request $request): bool
    {
        // Vérification des données
        $request = $request->request;
        if (
            !(
                $request->has('formeJuridique')
                && $request->has('nom')
                && $request->has('siren')
                && filter_var($request->get('siren'), FILTER_VALIDATE_INT)
                && $request->has('villeImmat')
                && $request->has('dateImmat')
                && $request->has('capital')
                && filter_var($request->get('capital'), FILTER_VALIDATE_INT)
            )
        ) {
            return false;
        }

        try {
            // Récupère la forme juridique correspondante
            $formeJuridique = $this->formeJuridiqueRepository->find($request->get('formeJuridique'));
            if (!$formeJuridique) {
                throw new Exception(
                    'Pas de forme juridique'
                );
            }

            // Crée une nouvelle SocieteInfo avec les données et la forme juridique
            $societeInfo = new SocieteInfo();
            $societeInfo->setNom($request->get('nom'));
            $societeInfo->setSiren($request->get('siren'));
            $societeInfo->setVilleImmatriculation($request->get('villeImmat'));
            $societeInfo->setDateImmatriculation(strtotime($request->get('dateImmat')));
            $societeInfo->setCapital($request->get('capital'));
            $societeInfo->setFormeJuridique($formeJuridique);

            // Crée une nouvelle Societe avec la SocieteInfo
            $societe = new Societe();
            $societe->setSocieteInfo($societeInfo);

            // Enregistrement en base
            $this->societeRepository->add($societe, true);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * @param int $id
     * @param Request $request
     *
     * Met à jour les infos d'une société
     * Return true en cas de succès ou false sinon
     */
    public function societeUpdate(int $id, Request $request): bool
    {
        // Vérification des données
        $request = $request->request;
        if (
            !(
                $request->has('formeJuridique')
                && $request->has('nom')
                && $request->has('siren')
                && filter_var($request->get('siren'), FILTER_VALIDATE_INT)
                && $request->has('villeImmat')
                && $request->has('dateImmat')
                && $request->has('capital')
                && filter_var($request->get('capital'), FILTER_VALIDATE_INT)
            )
        ) {
            return false;
        }

        try {
            // Récupère la société
            $societe = $this->societeRepository->find($id);
            if (!$societe) {
                throw new Exception(
                    'Pas de société'
                );
            }

            // Récupère la forme juridique correspondante
            $formeJuridique = $this->formeJuridiqueRepository->find($request->get('formeJuridique'));
            if (!$formeJuridique) {
                throw new Exception(
                    'Pas de forme juridique'
                );
            }

            // Met à jour le SocieteInfo avec les données et la forme juridique
            $societeInfo = $societe->getSocieteInfo();
            $societeInfo->setNom($request->get('nom'));
            $societeInfo->setSiren($request->get('siren'));
            $societeInfo->setVilleImmatriculation($request->get('villeImmat'));
            $societeInfo->setDateImmatriculation(strtotime($request->get('dateImmat')));
            $societeInfo->setCapital($request->get('capital'));
            $societeInfo->setFormeJuridique($formeJuridique);

            $societe->setSocieteInfo($societeInfo);

            // Enregistrement en base
            $this->societeRepository->flush();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * @param int $id
     *
     * Supprime une société
     */
    public function societeDelete(int $id)
    {
        $societe = $this->societeRepository->find($id);
        $this->societeRepository->remove($societe, true);
    }
}
