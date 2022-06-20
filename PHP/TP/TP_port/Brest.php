<?php 
require "Amarable.php";
require "Port.php" ;
require "Bateau.php";
require "Sousmarin.php" ;

// creation d'un port
$port = new Port("Brest");

$bateau = new Bateau();

$bateau->setMasse(60);
$bateau->affiche();
$port->accueilEngin($bateau);

$sm = new Sousmarin();
$sm->setMasse(80);
$sm->affiche();
$port->accueilEngin($sm);

$h = new Hydravion();
$h->setMasse(100);
$h->affiche();
$port->accueilEngin($h);

var dump($port);