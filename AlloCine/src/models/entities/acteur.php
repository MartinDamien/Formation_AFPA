<?php

namespace mvcobjet\Models\Entities;

class Acteur {
    private $id;
    private $nom;
    private $prenom;

    public function getId(): int {
        return $this->id;
    }

    public function setId($id): Acteur {
        $this->id = $id;
        return $this;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): Acteur {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): Acteur {
        $this->prenom = $prenom;
        return $this;
    }


}