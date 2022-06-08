<?php

namespace alloCine\models\services;

use alloCine\models\daos\realisateurDao;

class RealisateurService
{
    private $realisateurDao;

    public function __construct()
    {
        $this->realisateurDao = new RealisateurDao();
    }

    public function getAllRealisateur()
    {
        $result = $this->realisateurDao->findAll();
        return $result;
    }
}
