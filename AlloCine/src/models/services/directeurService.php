<?php

namespace alloCine\models\services;

use alloCine\models\daos\DirecteurDao;

class DirecteurService
{
    private $directeurDao;

    public function __construct()
    {
        $this->directeurDao = new DirecteurDao();
    }

    public function getAllDirecteur()
    {
        $result = $this->directeurDao->findAll();
        return $result;
    }
}
