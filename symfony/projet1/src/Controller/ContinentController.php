<?php

namespace App\Controller;

use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ContinentController extends AbstractController
{
    /**
     * @Route("/continent", name="listecontinent")
     */
    public function index(ContinentRepository $contirep): Response
    {
        $continents = $contirep->findAll();
        return $this->render('continent/index.html.twig', [
            'continents' => $continents,
        ]);
    }
}
