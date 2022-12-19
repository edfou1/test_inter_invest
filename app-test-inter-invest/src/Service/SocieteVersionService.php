<?php

namespace App\Service;

use App\Entity\Adresse;
use App\Entity\SocieteInfo;
use App\Entity\SocieteVersion;
use App\Repository\SocieteRepository;
use App\Repository\SocieteVersionRepository;
use Exception;
use Symfony\Component\HttpFoundation\Request;

class SocieteVersionService
{
    /**
     * @var SocieteRepository
     */
    private $societeRepository;

    /**
     * @var SocieteVersionRepository
     */
    private $societeVersionRepository;

    /**
     * SocieteVersionService constructor.
     * @param SocieteRepository $societeRepository
     * @param SocieteVersionRepository $societeVersionRepository
     */
    public function __construct(
        SocieteRepository $societeRepository,
        SocieteVersionRepository $societeVersionRepository
    ) {
        $this->societeRepository = $societeRepository;
        $this->societeVersionRepository = $societeVersionRepository;
    }

    /**
     * @param int $id
     * @param Request $request
     *
     * Enregistre une version d'une société
     * Return true en cas de succès ou false sinon
     */
    public function societeVersionAdd(int $id, Request $request): bool
    {
        // Vérification des données
        $request = $request->request;
        if (
            !(
                $request->has('dateArchivage')
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
            // Récupère et duplique la sociétéInfo
            $societeInfoCurrent = $societe->getSocieteInfo();
            $societeInfo = new SocieteInfo();
            $societeInfo->setNom($societeInfoCurrent->getNom());
            $societeInfo->setSiren($societeInfoCurrent->getSiren());
            $societeInfo->setVilleImmatriculation($societeInfoCurrent->getVilleImmatriculation());
            $societeInfo->setDateImmatriculation($societeInfoCurrent->getDateImmatriculation());
            $societeInfo->setCapital($societeInfoCurrent->getCapital());
            $societeInfo->setFormeJuridique($societeInfoCurrent->getFormeJuridique());

            // Récupère et duplique la liste des adresses
            $adressesCurrent = $societeInfoCurrent->getAdresses();
            foreach ($adressesCurrent as $adresseCurrent) {
                $adresse = new Adresse();
                $adresse->setNumero($adresseCurrent->getNumero());
                $adresse->setTypeVoie($adresseCurrent->getTypeVoie());
                $adresse->setNomVoie($adresseCurrent->getNomVoie());
                $adresse->setVille($adresseCurrent->getVille());
                $adresse->setCp($adresseCurrent->getCp());
                $societeInfo->addAdresse($adresse);
            }

            // Crée une nouvelle SocieteVersion
            $societeVersion = new SocieteVersion();
            $societeVersion->setSocieteInfo($societeInfo);
            $societeVersion->setSociete($societe);
            $societeVersion->setDateArchivage(strtotime($request->get('dateArchivage')));

            // Enregistrement en base
            $this->societeVersionRepository->add($societeVersion, true);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
