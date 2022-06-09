<?php

namespace alloCine\Models\Entities;

use DateTime;

class Film
{
    private $id;
    private $titre;
    private $description;
    private $duree;
    private $date;
    private $couverture;
    private $genre;
    private $realisateur;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): Film
    {
        $this->id = $id;
        return $this;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): Film
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Film
    {
        $this->description = $description;
        return $this;
    }

    public function getDuree(): string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): Film
    {
        $this->duree = $duree;
        return $this;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): Film
    {
        $this->date = $date;
        return $this;
    }

    public function getCouverture(): string
    {
        return $this->couverture;
    }

    public function setCouverture(string $couverture): Film
    {
        $this->couverture = $couverture;
        return $this;
    }

    public function getGenre(): genre
    {
        return $this->genre;
    }

    public function setGenre(genre $genre): Film
    {
        $this->genre = $genre;
        return $this;
    }

    public function getRealisateur(): Realisateur
    {
        return $this->realisateur;
    }

    public function setRealisateur(Realisateur $realisateur): Film
    {
        $this->realisateur = $realisateur;
        return $this;
    }

    public function getActeurs(): array
    {
        return $this->acteurs;
    }

    public function setActeurs(array $acteurs): Film
    {
        $this->acteurs = $acteurs;
        return $this;
    }

    public function addActeur(Acteur $acteur): Film
    {
        $this->acteurs[] = $acteur;
        return $this;
    }
}
