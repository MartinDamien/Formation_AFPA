<?php

namespace alloCine\controllers;

use alloCine\models\services\GenreService;

class genre{
    private $genreService;
    private $twig;

    public function __construct($t) {
        $this->genreService = new GenreService();
        $this->twig = $t;
    }

    public function getAllGenre()
    {
        $result = $this->genreService->getAllGenre();
        echo $this->twig->render('genre.html.twig', ['genres' => $result]);
    }

    public function createGenre()
    {
        echo $this->twig->render('genre_new.html.twig');
    }

    public function modifGenre()
    {
        echo $this->twig->render('genre_modif.html.twig');
    }
}