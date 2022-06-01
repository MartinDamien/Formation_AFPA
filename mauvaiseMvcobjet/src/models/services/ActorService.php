<?php

namespace mcvobjet\models\services;

use mvcobjet\models\daos\actorDao; //nom du fichier

class ActorService
{
    private $actorDao;

    public function __construct()
    {
        $this->actorDao = new ActorDao();
    }

    function getAllActors()
    {
        $acteur = $this->actorDao->findAll();
        return $acteur;
    }
}
