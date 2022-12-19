<?php

namespace App\Controller;

use App\Repository\FormeJuridiqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormeJuridiqueController extends AbstractController
{
    /**
     * @Route("/formes", name="app_get_formes_juridiques", methods={"GET"})
     * @param FormeJuridiqueRepository $formeJuridiqueRepository
     *
     * Retourne la liste des formes juridiques
     */
    public function getFormesJuridiques(
        FormeJuridiqueRepository $formeJuridiqueRepository
    ): Response
    {
        $data = $formeJuridiqueRepository->findAll();
        return new JsonResponse(['data' => $data]);
    }
}
