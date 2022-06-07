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

    public function getAllActeur()
    {
        $result = $this->ActeurDao->findAll();
        return $result;
    }
    
}
