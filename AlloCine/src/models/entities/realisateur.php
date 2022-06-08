<?php

namespace alloCine\Models\Entities;

class Realisateur
{
    private $id;
    private $nom;
    private $prenom;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): Realisateur
    {
        $this->id = $id;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): Realisateur
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): Realisateur
    {
        $this->prenom = $prenom;
        return $this;
    }
}
