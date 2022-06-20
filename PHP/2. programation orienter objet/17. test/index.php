<?php

class Adresse
{
    private $n°_rue;
    private $rue;
    private $cp;
    private $ville;

    public function __construct($no, $r, $cp, $v)
    {
        $this->n°_rue = $no;
        $this->rue = $r;
        $this->cp = $cp;
        $this->ville = $v;
    }
}

class personne
{
    private $nom;
    private $prenom;
    private $adresse;

    public function __construct($nom, $prenom, $no, $r, $cp, $v)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = new Adresse($no, $r, $cp, $v);
    }

    public function getAdresse()
    {
        echo $this->adresse->no . "," . $this->adresse->rue . "," . $this->adresse->cp . "," . $this->adresse->ville;
    }
    public function getNomPrenom()
    {
        echo $this->nom . "," . $this->prenom;
    }
}
