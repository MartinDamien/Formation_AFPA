<?php

class car {
    //les attribut de ma class
    private $modele;
    private $color;
    private $energie;
    private $reservoir;
    private $vitesse;

    public function __construct($m,$c,$e,$r,$v)
    {
        $this->modele = $m;
        $this->color = $c;
        $this->energie = $e;
        $this->reservoir = $r;
        $this->vitesse = $v;
    }

    public function setmodele($modele){
        $this->modele = $modele;}
    public function getmodele(){
        return $this->modele;}

    //les methodes
    public function hello(){
        return " bip bip";}

    public function rempli($litres){
        $this->reservoir = $litres;}

    public function demarre(){
        $this->vitesse = 10;}

    public function accelere($plus){
        $this->vitesse += $plus;}
}

class catcar extends car{
    public function hello(){
       return "this isn't a CAAAARRR";}
}