<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Animal;

class AnimalController extends AbstractController
{

    // #[Route('/', name: 'animal')]
    // public function index (ManagerRegistry $repository)
    // {
    //     $animaux = $repository->findAll();
            // print_r($animaux);
    //     return $this->render('animal/index.html.twig', [
    //         'animaux' => $animaux
    //     ]);
    // }

    #[Route('/', name: 'animal')]
    public function index(): Response
    {
        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
        ]);
    }

    #[Route('/animal', name: 'animalShowAll')]
    public function showAll(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Animal::class);
        $animals = $repository->findAll();

        return $this->render('animal/showAll.html.twig', [
            'animaux' => $animals,
        ]);
    }
}
