<?php

namespace mvcobjet\models\services;

use mvcobjet\models\daos\ActorDao; // nom du fichier

class ActorService
{

    private $ActorDao;

    public function __construct()
    {
        $this->ActorDao = new ActorDao();
    }

    public function getAllActors()
    {
        $acteurs = $this->ActorDao->findAll();
        return $acteurs;
    }

    public function getActor($id)
    {
        $acteur = $this->ActorDao->FindById($id);
        return $acteur;
    }

    public function create($actor)
    {
        // on aurait possibilité d'effectuer un traitement quelconque ici 
        // lié à l'application.
        $this->ActorDao->create($actor);
    }

    public function update($actor)
    { //ajouter recement
        $this->ActorDao->update($actor);
    }
}
