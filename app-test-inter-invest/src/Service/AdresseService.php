<?php

namespace App\Service;

use App\Entity\Adresse;
use App\Repository\AdresseRepository;
use App\Repository\SocieteInfoRepository;
use Exception;
use Symfony\Component\HttpFoundation\Request;

class AdresseService
{
    /**
     * @var AdresseRepository
     */
    private $adresseRepository;

    /**
     * @var SocieteInfoRepository
     */
    private $societeInfoRepository;

    /**
     * AdresseService constructor.
     * @param AdresseRepository $adresseRepository
     * @param SocieteInfoRepository $societeInfoRepository
     */
    public function __construct(
        AdresseRepository $adresseRepository,
        SocieteInfoRepository $societeInfoRepository
    ) {
        $this->adresseRepository = $adresseRepository;
        $this->societeInfoRepository = $societeInfoRepository;
    }


    /**
     * @param int $idSocieteInfo
     * @param Request $request
     *
     * Enregistre une adresse
     * Return true en cas de succès ou false sinon
     */
    public function adresseAdd(int $idSocieteInfo, Request $request): bool
    {
        // Vérification des données
        $request = $request->request;
        if (
            !(
                $request->has('numero')
                && $request->has('typeVoie')
                && $request->has('nomVoie')
                && $request->has('ville')
                && $request->has('cp')
                && filter_var($request->get('cp'), FILTER_VALIDATE_INT)
            )
        ) {
            return false;
        }

        try {
            // Récupère la societe info
            $societeInfo = $this->societeInfoRepository->find($idSocieteInfo);
            if (!$societeInfo) {
                throw new Exception(
                    'Pas de societeInfo'
                );
            }

            // Crée une nouvelle adresse avec les données et la societe info
            $adresse = new Adresse();
            $adresse->setNumero($request->get('numero'));
            $adresse->setTypeVoie($request->get('typeVoie'));
            $adresse->setNomVoie($request->get('nomVoie'));
            $adresse->setVille($request->get('ville'));
            $adresse->setCp($request->get('cp'));
            $adresse->setSocieteInfo($societeInfo);

            // Enregistrement en base
            $this->adresseRepository->add($adresse, true);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * @param int $id
     * @param Request $request
     *
     * Met à jour les infos d'une adresse
     * Return true en cas de succès ou false sinon
     */
    public function adresseUpdate(int $id, Request $request): bool
    {
        // Vérification des données
        $request = $request->request;
        if (
            !(
                $request->has('numero')
                && $request->has('typeVoie')
                && $request->has('nomVoie')
                && $request->has('ville')
                && $request->has('cp')
                && filter_var($request->get('cp'), FILTER_VALIDATE_INT)
            )
        ) {
            return false;
        }

        try {
            // Récupère l'adresse
            $adresse = $this->adresseRepository->find($id);
            if (!$adresse) {
                throw new Exception(
                    'Pas d\'adresse'
                );
            }

            // Met à jour l'adresse
            $adresse->setNumero($request->get('numero'));
            $adresse->setTypeVoie($request->get('typeVoie'));
            $adresse->setNomVoie($request->get('nomVoie'));
            $adresse->setVille($request->get('ville'));
            $adresse->setCp($request->get('cp'));


            // Enregistrement en base
            $this->adresseRepository->flush();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * @param int $id
     *
     * Supprime une adresse
     */
    public function adresseDelete(int $id)
    {
        $adresse = $this->adresseRepository->find($id);
        $this->adresseRepository->remove($adresse, true);
    }
}
