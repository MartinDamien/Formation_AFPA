<?php
namespace App\Controller;

use App\Entity\Animal;
use App\Form\AnimalType;
use App\Repository\AnimalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="liste_animal")
     */
    public function index(AnimalRepository $rep): Response
    {
        $animaux = $rep->findAll() ;
        dd($animaux);
        return $this->render('animal/index.html.twig', [
            'animaux' => $animaux
        ]);
    }

    /**
     * @Route("/moinsde/{poids}", name="moinsde")
     */
    public function animoins(AnimalRepository $rep, $poids): Response {
       $animaux= $rep->findByPoidsUnder($poids);
       return $this->render('animal/index.html.twig', [
        'animaux' => $animaux
    ]);

    }
   
    /**
     * @Route("/animal/{id}", name="animal")
     */
    public function afficheanimal($id,AnimalRepository $repository)
    {
        $animal = $repository->find($id);
        return $this->render('animal/afficheanimal.html.twig',[
            "animal" => $animal
        ]);
    }

    /**
     * @Route("/animalcreation", name="ani_creation")
     * @Route("/modifAnimal/{id}", name="animal")
     */
    public function modifCreaAnimal(Animal $animal=null,Request $request, EntityManagerInterface $om)
    {
        // ObjectManager
        // ManagerRegistery
        // EntityManagerInterface

        // Normalement il faudrait aller chercher avec la fonction du Repository l'animal correspondant à l'{id}
        // Mais en donnant en argument Animal $animal le paramConverter va effectuer ces opérations.


        // ici nécessaire uniquement pour la création. 
        if (!$animal) {
            $animal = new Animal();
        }

        $form = $this->createForm(AnimalType::class,$animal);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $om->persist($animal);
            $om->flush();
            $this->addFlash('success', "L'action a été effectué");
            return $this->redirectToRoute("liste_animal");
        }

        return $this->render('animal/modifanimal.html.twig',[
            "animal" => $animal,
            "form" => $form->createView()
        ]);
       
    }
}
