<?php

class Jambes
{
    private $taille;
    private $poilue;
    public function __construct($long, $poil)
    {
        $this->taille = $long;
        $this->poilue = $poil;
    }
    public function gettaille()
    {
        return $this->taille;
    }
    public function getpoilue()
    {
        return $this->poilue;
    }
}
