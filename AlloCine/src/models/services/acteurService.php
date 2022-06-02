<?php

namespace alloCine\services;

use alloCine\models\daos\ActeurDao;

class ActeurService
{
    private $ActeurDao;

    public function __construct()
    {
        $this->ActeurDao = new ActeurDao();
    }
}
