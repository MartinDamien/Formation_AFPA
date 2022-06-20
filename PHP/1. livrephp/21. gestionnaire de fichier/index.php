<?php
require "../outils.php";

$fichier = fopen("fichier.txt","r");
    // argument1 = nom du fichier
    // argument 2 = mode ("r"pour read)
    // ouvre le fichier "fichier.txt" en mode lecture
while ( ($line = fgets($fichier)) != false ) {
    // tant que chaque lecture de ligne est differente de false
    //$tabelau = explode(" ","chaine de caractere"); => decoupe un chaine en fonction d'un separateur
    //
echo "<p>".$line."</p>" ;
}
fclose($fichier) ;

?>