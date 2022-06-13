<?php

namespace alloCine\controllers;

use alloCine\models\services\realisateurService;

class realisateur {
    private $realisateurService;
    private $twig;

    public function __construct($t) {
        $this->realisateurService = new realisateurService();
        $this->twig = $t;
    }

    public function getAllRealisateur() {
        $result = $this->realisateurService->getAllRealisateur();
        echo $this->twig->render('realisateur.html.twig', ['realisateurs' => $result]);
    }

    public function createRealisateur() {
        echo $this->twig->render('realisateur_new.html.twig');
    }

    public function modifRealisateur() {
        echo $this->twig->render('realisateur_modif.html.twig');
    }
}