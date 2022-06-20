<?php

namespace alloCine\models\services;

use alloCine\models\daos\filmDao;

class filmService
{
    private $filmDao;

    public function __construct()
    {
        $this->filmDao = new FilmDao();
    }

    public function getAllFilm()
    {
        $result = $this->filmDao->findAll();
        return $result;
        
    }
}