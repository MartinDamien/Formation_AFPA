<?php

namespace alloCine\models\services;

use alloCine\models\daos\ActeurDao;

class ActeurService
{
    private $ActeurDao;

    public function __construct()
    {
        $this->ActeurDao = new ActeurDao();
    }

    public function getAllActeurs()
    {
        return $this->ActeurDao->findAll();
    }

    public function getActorById($id)
    {
        return $this->ActeurDao->findById($id);
        var_dump($id);
    }
}