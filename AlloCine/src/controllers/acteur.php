<?php
namespace alloCine\controllers;

use alloCine\models\services\ActeurService;

class acteur {
    private $acteurService;
    private $twig;

    public function __construct($t) {
        $this->acteurService = new ActeurService();
        $this->twig = $t;
    }

    public function getAllActeur()
    {
        $result = $this->acteurService->getAllActeur();
        echo $this->twig->render('acteur.html.twig', ['acteurs' => $result]);
    }

    public function createActeur()
    {
        echo $this->twig->render('acteur_new.html.twig');
    }

    public function addActeur()
    {
        
    }

    public function modifActeur()
    {
        echo $this->twig->render('acteur_modif.html.twig');
    }
}