<?php

namespace alloCine\controllers;

class controller
{

    private $twig;

    public function __construct($t)
    {
        $this->twig = $t;
    }

    public function index()
    {
        echo $this->twig->render('index.html.twig');
    }

    public function getAllFilm()
    {
        $result = $this->filmService->getAllFilm();
        echo $this->twig->render('film.html.twig');
    }

    public function getAllGenre()
    {
        $result = $this->genreService->getAllGenre();
        echo $this->twig->render('genre.html.twig');
    }

    public function getAllRealisateur()
    {
        $result = $this->realisateurService->getAllRealisateur();
        echo $this->twig->render('realisateur.html.twig');
    }

    public function getAllActeur()
    {
        $result = $this->acteurService->getAllActeur();
        echo $this->twig->render('acteur.html.twig');
    }
}
