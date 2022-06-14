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
    public function index(AnimalRepository $animalrepo): Response
    {
        $animal = $animalrepo->findAll();
        return $this->render('animal/index.html.twig', [
            'animal' => $animal,
        ]);
    }

    /**
     * @Route("/animal/{id}", name="app_animal_show")
     */
    public function show(AnimalRepository $animalrepo, $id): Response
    {
        $animal = $animalrepo->find($id);
        return $this->render('animal/show.html.twig', [
            'animal' => $animal,
        ]);
    }
    
    /**
     * @Route("/animal/add", name="app_animal_add")
     */
    public function add(AnimalRepository $animalrepo): Response
    {
        $animal = $animalrepo->findAll();
        return $this->render('animal/add.html.twig', [
            'animal' => $animal,
        ]);
    }
    
    /**
     * @Route("/animal/{id}/delete", name="app_animal_delete")
     */
    public function delete(AnimalRepository $animalrepo, $id): Response
    {
        $animal = $animalrepo->find($id);
        return $this->render('animal/delete.html.twig', [
            'animal' => $animal,
        ]);
    }

    /**
     * @Route("/animal/{id}/edit", name="app_animal_edit")
     */
    public function edit(AnimalRepository $animalrepo, $id): Response
    {
        $animal = $animalrepo->find($id);
        return $this->render('animal/edit.html.twig', [
            'animal' => $animal,
        ]);
    }

    /**
     * @Route("/animal/{id}/update", name="app_animal_update")
     */
    // public function update(AnimalRepository $animalrepo, $id): Response
    // {
        
    // }
}