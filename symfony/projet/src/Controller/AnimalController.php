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

    #[Route('/animal/{id}', name: "afficher_animal")]
    public function afficherAnimal(ManagerRegistry $doctrine, $id): Response
    { 
        $repository = $doctrine->getRepository(Animal::class);
        $unanimal = $repository->find($id);

        return $this->render('animal/afficheAnimal.html.twig',[ 
            "animal" => $unanimal 
        ]);  
    }

    #[Route('/animal/{id}/edit', name: "edit_animal")]
    public function editAnimal(ManagerRegistry $doctrine, $id): Response
    { 
        $repository = $doctrine->getRepository(Animal::class);
        $unanimal = $repository->find($id);

        return $this->render('animal/editAnimal.html.twig',[ 
            "animal" => $unanimal 
        ]);  
    }

    #[Route('/animal/{id}/delete', name: "delete_animal")]
    public function deleteAnimal(ManagerRegistry $doctrine, $id): Response
    { 
        $repository = $doctrine->getRepository(Animal::class);
        $unanimal = $repository->find($id);

        return $this->render('animal/deleteAnimal.html.twig',[ 
            "animal" => $unanimal 
        ]);  
    }

    #[Route('/animal/add', name: "add_animal")]
    public function addAnimal(): Response
    { 
        return $this->render('animal/addAnimal.html.twig');  
    }
}
