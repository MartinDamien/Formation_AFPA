<?php

class car
{
    //les attribut de ma class
    private $modele;
    private $color;
    private $energie;
    private $reservoir;
    private $vitesse;

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
