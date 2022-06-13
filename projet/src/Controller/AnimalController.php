<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="app_animal")
     */
    public function index(AnimalRepository $anirep): Response
    {
        $animal = $anirep->findAll();
        return $this->render('animal/index.html.twig', [
            'Animaux' => $animal,
        ]);
    }
}
