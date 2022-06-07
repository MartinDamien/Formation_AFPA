<?php

namespace Allocine\Models\Entities;

class Genre
{
    private $id;
    private $nom;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): Genre
    {
        $this->id = $id;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): Genre
    {
        $this->nom = $nom;
        return $this;
    }
}
