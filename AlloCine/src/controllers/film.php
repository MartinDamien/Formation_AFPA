<?php
namespace alloCine\controllers;

use alloCine\models\services\filmService;

class film {
    private $filmService;
    private $twig;

    public function __construct($t) {
        $this->filmService = new filmService();
        $this->twig = $t;
    }

    public function getAllFilm()
    {
        $result = $this->filmService->getAllFilm();
        echo $this->twig->render('film.html.twig', ['films' => $result]);
    }

    public function createFilm()
    {
        echo $this->twig->render('film_new.html.twig');
    }

    public function modifFilm()
    {
        echo $this->twig->render('film_modif.html.twig');
    }
}