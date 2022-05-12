<?php

class Bedroom
{
    private $M²;
    private $NbFentre;


    public function __construct($metre, $Nb)
    {
        $this->M² = $metre;
        $this->NbFentre = $Nb;
    }

    public function getM²()
    {
        return $this->M²;
    }
    public function getNbFentre()
    {
        return $this->NbFentre;
    }
}
