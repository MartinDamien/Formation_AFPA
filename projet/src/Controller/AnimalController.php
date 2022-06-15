<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


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
     * @Route("/animal/add", name="app_animal_add")
     * @Route("/modifAnimal/{id}", name="modifanimal")
     */
    public function modifCreaAnimal(Animal $animal=null,Request $request, EntityManagerInterface $om)
    {
        if (!$animal) {
            $animal = new Animal();
        }

        $form = $this->createForm(AnimalType::class,$animal);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $om->persist($animal);
            $om->flush();
           // dd($animal);
            $this->addFlash('success', "L'action a été effectué");
            return $this->redirectToRoute("liste_animal");
        }

        return $this->render('animal/edit.html.twig',[
            "animal" => $animal,
            "form" => $form->createView()
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

    // /**
    //  * @Route("/animal/{id}/update", name="app_animal_update")
    //  */
    // public function update(AnimalRepository $animalrepo, $id): Response
    // {
        
    // }
}