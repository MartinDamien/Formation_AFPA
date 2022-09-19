<?php
// class = sorte moule permettant de créer des objets 
class Utilisateur
{
    // variables 
    private $name;
    private $genre;
    private $age;

    // methodes
    // __construct est un mot clé de php 
    // qui permet de construire un objet utilisateur
    public function __construct($n, $g, $a)
    {
        $this->name = $n;
        $this->genre = $g;
        $this->age = $a;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($nom)
    {
        $this->name = $nom;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($g)
    {
        if (($g != "Homme") && ($g != "Femme")) {
            throw new Exception("inserer un genre respectable, bande de payen !");
        }
        $this->genre = $g;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function anneeAvantRetraite()
    {
        return 62 - ($this->age);
    }
}
