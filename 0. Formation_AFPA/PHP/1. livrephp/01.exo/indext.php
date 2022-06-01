<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>test2</h1>

<?php 

function debug($l) {
    echo "<pre>";
    print_r($l) ;   
    echo "</pre>"; 
}

$liste = [1,2,3,4,5];
$ajout = [12,43,22];

// la fonction print_r de php permet d'afficher un tableau

// print_r($liste) ; // donne le résultat suivant: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
// C'est affichage n'est pas très simple à lire surtout pour les tableaux plus compliqué donc 
// on va afficher d'une autre manière plus lisible

 affichera le tableau ainsi 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4()
    [4] => 5
)

// on peut à tout moment interrompre l'interpretation du script par apache et passer en HTML
// et reprendre l'interpretation du script php par le serveur
// Comme dans JavaScript on peut effectuer des opérations sur le tableau
?>
<h1>Nombre de variables dans liste:
<?php  echo count($liste) ; ?>
</h1> 

<?php
// Maintenant on va exécuter des fonctions sur le tableau Puis utiliser la fonction des bugs qu'on va développer

?>
1er élément : <?php echo reset($liste); ?>
Dernier element d'une liste: <?php echo end($liste); ?>
<?php 
// Le faire maintenant des fonctions qui permettent d'ajouter ou de supprimer des éléments d'une liste
array_push($liste,6); // ajoute un élément 
debug($liste);
array_pop($liste); debug($liste) ;// supprime dernier élément 
array_unshift($liste) ;debug($liste) ; // ajoute élément au début
array_shift($liste) ;debug($liste) ; // supprime 1er élément 
unset($liste[2]); debug($liste) ; // supprime une variable à une position donnée.
$liste2 = array_merge($liste,$ajout) ; debug($liste2) // merge de 2 listes (tableaux) 

// Il y a bien d'autres fonctions de travail sur la liste qui existe sur PHP.net
// Je mets dans discord

?>