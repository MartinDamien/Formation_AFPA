<?php

require "createur.php";

$auto1 = new car("", "", "", "", "");
$auto2 = new car("", "", "", "", "");

$auto1->modele = "citroen";
$auto2->modele = "BMW";

echo $auto1->modele;
echo $auto1->hello() . "<br>";
$auto1->rempli(50);
$auto1->demarre();
$auto1->accelere(20);
echo $auto1->vitesse . "<br>";
