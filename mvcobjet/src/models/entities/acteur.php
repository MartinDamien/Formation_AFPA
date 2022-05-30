<?php

namespace MVC\models\entities;

class Acteur
{
    private $id;
    private $prenom;
    private $nom;

    public function getId(): int{
        return $this->id;
    }
    public function getPrenom(): string{
        return $this->prenom;
    }
    public function getNom(): string{
        return $this->nom;
    }
    public function setId(int $id){
        return $this->id = $id;
    }
    public function setPrenom(string $prenom){
        return $this->prenom = $prenom;
    }
    public function setNom(string $nom){
        return $this->nom = $nom;
    }

    
}
