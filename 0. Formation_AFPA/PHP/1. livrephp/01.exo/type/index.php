<?php 
// constante
define("DB_NAME","ecommerce"); 
// Ici on définit une constante c'est-à-dire que partout où il y aura e-commerce ce sera remplacé
// Six est effectué durant à la con interprétation du programme avant que le script ne soit exécuté

require_once("fonctions.php");
// Types de données en PHP

// String (chaine de char)


// Boolean (true/ false)
// Integer (Entier)
// float (decimaux)
// Array (tableaux)
// Object (Programmation Orientée Objet) 
// NULL


$str = "hello world";
debug (is_string($str)); // test 

$a = true ;
$b = false ;

if (is_bool($a)) {
   echo "$a est un booléen<br>"; // vérifi si c'est un booléen.
}

$x=3 ;
$y=7 ;
$somme = $x + $y ; 
echo($somme) ;

if (is_int($x)) { 
    echo "x est entier<br>";
}

// Notre fonction qui permet d'afficher la valeur d'une variable et var_dump

$decimal = 10.40;
var_dump($decimal);echo "<br>";

// tableau [] ou avec la fonction array() 
$tab = ["une","chaine"]; // peut être créé ainsi ou
$tab1 = array("html","JS","CSS") ;  // crée un tableau de la même manière 
debug($tab1);

echo "Je me connecte à la base de donnée:". DB_NAME ;
// Par convention les constantes sont en majuscules.

?>