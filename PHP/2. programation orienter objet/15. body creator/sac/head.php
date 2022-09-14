<?php

class Head
{
    private $yeux;
    private $nez;
    private $bouche;
    public function __construct($y, $n, $b)
    {
        $this->yeux = $y;
        $this->nez = $n;
        $this->bouche = $b;
    }
    public function getYeux()
    {
        return $this->yeux;
    }
    public function getNez()
    {
        return $this->nez;
    }
    public function getBouche()
    {
        return $this->bouche;
    }
}

// $tete = new Head("Bleus","Droit","Grande");
// echo($tete->getYeux());
// echo($tete->getNez());
// echo($tete->getBouche());
