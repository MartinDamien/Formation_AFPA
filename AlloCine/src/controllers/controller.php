<?php

namespace alloCine\controllers;

use alloCine\models\services\ActeurService;
use alloCine\models\services\FilmService;
use alloCine\models\services\GenreService;
use alloCine\models\services\RealisateurService;

class controller
{
    private $acteurService;
    private $filmService;
    private $genreService;
    private $realisateurService;
    private $twig;

    public function __construct($t)
    {
        $this->acteurService = new ActeurService();
        $this->filmService = new FilmService();
        $this->genreService = new GenreService();
        $this->realisateurService = new RealisateurService();
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
        echo $this->twig->render('acteur.html.twig', ['acteurs' => $result]);
    }
}
