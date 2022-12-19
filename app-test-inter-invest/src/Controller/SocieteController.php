<?php

namespace App\Controller;

use App\Service\AdresseService;
use App\Service\SocieteService;
use App\Service\SocieteVersionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SocieteController extends AbstractController
{
    /**
     * @Route("/societe/{id}", name="app_get_societe", methods={"GET"})
     * @param int $id
     * @param SocieteService $societeService
     *
     * Affiche toutes les infos d'une société
     */
    public function getSociete(
        int $id,
        SocieteService $societeService
    ): Response
    {
        $data = $societeService->societeGet($id);
        return $this->render(
            'societe/index.html.twig',
            [
                'data' => $data
            ]
        );
    }

    /**
     * @Route("/societe/{id}", name="app_update_societe", methods={"PUT"})
     * @param int $id
     * @param Request $request
     * @param SocieteService $societeService
     *
     * Modifie les infos d'une société
     */
    public function putSociete(
        int $id,
        Request $request,
        SocieteService $societeService
    ): Response
    {
        $response = $societeService->societeUpdate($id, $request) ? new JsonResponse('Société mise à jour', 200) :
            new JsonResponse('Erreur de mise à jour', 500);
        return $response;
    }

    /**
     * @Route("/societe/{id}/version", name="app_add_societe_version", methods={"POST"})
     * @param int $id
     * @param Request $request
     * @param SocieteService $societeService
     *
     * Archive une version d'une société
     */
    public function postSocieteVersion(
        int $id,
        Request $request,
        SocieteVersionService $societeVersionService
    ): Response
    {
        $response = $societeVersionService->societeVersionAdd($id, $request) ? new JsonResponse('Version enregistrée', 200) :
            new JsonResponse('Erreur d\'enregistrement de la version', 500);
        return $response;
    }

    /**
     * @Route("/societe/{idSocieteInfo}/adresse", name="app_add_adresse", methods={"POST"})
     * @param int $idSocieteInfo
     * @param Request $request
     * @param AdresseService $adresseService
     *
     * Ajoute une nouvelle adresse
     */
    public function postAdresseSociete(
        int $idSocieteInfo,
        Request $request,
        AdresseService $adresseService
    ): Response
    {

        $response = $adresseService->adresseAdd($idSocieteInfo, $request) ? new JsonResponse('Adresse enregistrée', 200) :
            new JsonResponse('Erreur d\'enregistrement', 500);
        return $response;
    }

    /**
     * @Route("/societe/{idAdresse}/adresse", name="app_update_adresse", methods={"PUT"})
     * @param Request $idAdresse
     * @param Request $request
     * @param AdresseService $adresseService
     *
     * Modifie les infos d'une adresse
     */
    public function putAdresseSociete(
        int $idAdresse,
        Request $request,
        AdresseService $adresseService
    ): Response
    {
        $response = $adresseService->adresseUpdate($idAdresse, $request) ? new JsonResponse('Adresse mise à jour', 200) :
            new JsonResponse('Erreur de mise à jour', 500);
        return $response;
    }

    /**
     * @Route("/societe/{idAdresse}/adresse", name="app_delete_adresse", methods={"DELETE"})
     * @param Request $idAdresse
     * @param AdresseService $adresseService
     *
     * Supprime une adresse
     */
    public function deleteAdresseSociete(
        int $idAdresse,
        AdresseService $adresseService
    ): Response
    {
        $adresseService->adresseDelete($idAdresse);
        return new JsonResponse('Adresse supprimée', 200);
    }
}
