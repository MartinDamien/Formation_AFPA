<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EspeceController extends AbstractController
{
    #[Route('/espece', name: 'app_espece')]
    public function index(): Response
    {
        return $this->render('espece/index.html.twig', [
            'controller_name' => 'EspeceController',
        ]);
    }
}
