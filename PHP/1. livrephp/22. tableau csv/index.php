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
        td{
            border:1px  solid;
            border-color: grey;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Methode 1 : Explode</h1>
<?php
$fichier = fopen("Classeur1.csv","r");
    // argument1 = nom du fichier
    // argument 2 = mode ("r"pour read)
    // ouvre le fichier "fichier.txt" en mode lecture

echo "<table>";
while ( ($line = fgets($fichier)) != false ){
    // tant que chaque lecture de ligne est differente de false
    //$tabelau = explode(" ","chaine de caractere"); => decoupe un chaine en fonction d'un separateur
    //
    // $tableau = explode(";",$line);
    // si $line = zz;aa;ee;dd
    // $tab = explode(";",$line);
    // $tab[0] => ZZ
    // $tab[1] => aa
    // $tab[2] => ee
    // $tab[3] => dd
    // $tableau = explode(";",$line);

    echo "<tr>";

    $tab = explode(";",$line);
    foreach($tab as $cell){
        echo "<td>".$cell."</td>";
    }
}
echo "</table>";
fclose($fichier);

?>
<h1>Methode 2 : get</h1>
<?php

?>
</body>

</html>