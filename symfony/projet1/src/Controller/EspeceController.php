<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Espece;

class EspeceController extends AbstractController
{
    #[Route('/espece', name: 'app_espece')]
    public function index(): Response
    {
        return $this->render('espece/index.html.twig', [
            'controller_name' => 'EspeceController',
        ]);
    }

    #[Route('/especes', name: "espece_showAll")]
    public function showAll(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Espece::class);
        $especes = $repository->findAll();

        return $this->render('espece/allEspece.html.twig', [
            'especes' => $especes,
        ]);
    }

    /**
     *  [Route('/espece/{id}/edit', name: "edit_espece")]
     */
    public function afficherEspece(ManagerRegistry $doctrine, $id): Response
    {
        $repository = $doctrine->getRepository(Espece::class);
        $uneespece = $repository->find($id);

        return $this->render('espece/afficheEspece.html.twig', [
            "espece" => $uneespece
        ]);
    }




    #[Route('/espece/{id}/edit', name: "edit_espece")]
    public function editEspece(ManagerRegistry $doctrine, $id): Response
    {
        $repository = $doctrine->getRepository(Espece::class);
        $uneespece = $repository->find($id);

        return $this->render('espece/editEspece.html.twig', [
            "espece" => $uneespece
        ]);
    }

    #[Route('/espece/{id}/delete', name: "delete_espece")]
    public function deleteEspece(ManagerRegistry $doctrine, $id): Response
    {
        $repository = $doctrine->getRepository(Espece::class);
        $uneespece = $repository->find($id);

        return $this->render('espece/deleteEspece.html.twig', [
            "espece" => $uneespece
        ]);
    }
}
