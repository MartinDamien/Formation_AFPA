<?php

require 'utilisateur.php'; //inclusion de la classe utilisateur
require 'admin.php';    // inclusion de la classe Admin qui herite de utilisateur
require 'Employé.php';  // Elle utilise les meme atributs et methode que utilisateur
                        // et est SPÉCIALISÉE avec ses methodes et ses attributs.
$jean = new Admin("jean","masculin",33);
echo "<pre>";
print_r($jean);
echo"<br>";
echo $jean->getName()."<br>";
$jean->setSalaire(2500);
print_r($jean);
echo "</pre>";

$paul = new Employe("paul","homme",47);
echo "<pre>";
$paul->setHeure(48);
print_r($paul);
echo "</pre>";

// crée une classe Employé qui herite de Utilisateur
// qui à comme propriété spécifique nombre d'heure travaillées
?>