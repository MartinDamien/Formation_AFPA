<?php
require "../outils.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>page php</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    </style>
</head>
<body><?php

$fichier = fopen("fichier2.txt","a");
   // argument1 = nom du fichier 
    // argument2 = mode (r pour read (en lecture seule))
    // ouvre le fichier fichier.txt em mode lecture 
/*
'r'        Ouvre en lecture seule et place le pointeur de fichier au début du fichier.
'r+'    Ouvre en lecture et écriture et place le pointeur de fichier au début du fichier.
'w'        Ouvre en écriture seule ; place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. Si le fichier n'existe pas, on tente de le créer.
'w+'    Ouvre en lecture et écriture ; le comportement est le même que pour 'w'.
'a'        Ouvre en écriture seule ; place le pointeur de fichier à la fin du fichier. Si le fichier n'existe pas, on tente de le créer. Dans ce mode, la fonction fseek() n'a aucun effet, les écritures surviennent toujours.

*/
$line = 'text'; // \n fait un retour chariot
//
// tant que chaque lecture de ligne est différent de false 
// $tab = explode(" ","chaine de caractere");  => decoupe une chaine en fonction d'un separateur
//  $tab = explode(";",$line)
//  si $line =  zz;aa;ee;dd
// $tab = explode(";",$line)
// $tab[0] => zz
// $tab[1] => aa
// $tab[2] => ee
// $tab[3] => dd


if ( fwrite($fichier2, $line) === FALSE ) {
    echo "erreur" ;
    exit;
};

?></body>

</html>