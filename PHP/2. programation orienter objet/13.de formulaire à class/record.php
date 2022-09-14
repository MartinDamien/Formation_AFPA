<?php

require 'utilisateur.php';

echo "<pre>";
print_r($_POST);
echo "</pre>";

//$u1 = new Utilisateur($_POST['nom'],$_POST['genre'],$_POST['age']);

// Specifies the name of the user
$nom = $_POST['nom'] ;
// Checks if a comma - separated value is set.
if( isset($nom)&&($nom != "")){
    $u = new Utilisateur($_POST['nom'],$_POST['genre'],$_POST['age']);
    // Prints out $u.
    echo "<pre>";
    print_r($u);
    echo "</pre>";
    $_POST['nom'] = "";
    $nom="";
}

/* crée un utilisateur
if(isset($_POST['nom'])){
    instancier l'objet utilisateur 
}*/