<?php

namespace App\Controller;

use App\Service\SocieteService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SocieteListController extends AbstractController
{
    /**
     * @Route("/societes", name="app_list_societe", methods={"GET"})
     * @param Request $request
     * @param SocieteService $societeService
     *
     * Page d'accueil listant les infos basiques de toutes les sociétés
     */
    public function getSocieteList(
        Request $request,
        SocieteService $societeService
    ): Response
    {
        $data = $societeService->societeList($request);
        return $this->render(
            'societe_list/list.html.twig',
            [
                'data' => $data
            ]
        );
    }

    /**
     * @Route("/societes", name="app_add_societe", methods={"POST"})
     * @param Request $request
     * @param SocieteService $societeService
     *
     * Ajoute une nouvelle société
     */
    public function postSociete(
        Request $request,
        SocieteService $societeService
    ): Response
    {
        $response = $societeService->societeAdd($request) ? new JsonResponse('Société enregistrée', 200) :
            new JsonResponse('Erreur d\'enregistrement', 500);
        return $response;
    }


    /**
     * @Route("/societes/{id}", name="app_delete_societe", methods={"DELETE"})
     * @param int $id
     * @param SocieteService $societeService
     *
     * Supprime une societe
     */
    public function deleteSociete(
        int $id,
        SocieteService $societeService
    ): Response
    {
        $societeService->societeDelete($id);
        return new JsonResponse('Société supprimée', 200);
    }
}
