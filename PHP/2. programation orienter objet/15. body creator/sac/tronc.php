<?php

class Tronc
{
    private $corpulance;
    private $couleur;
    public function __construct($corp, $coul)
    {
        $this->corpulance = $corp;
        $this->couleur = $coul;
    }
    public function getcorpulance()
    {
        return $this->corpulance;
    }
    public function getcouleur()
    {
        return $this->couleur;
    }
}
