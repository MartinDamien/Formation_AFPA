<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page PHP</title>
    </head>
    <body>
        <h1>
            TITRE
        </h1>
        <p>
            Esse voluptate laboris magna non duis cupidatat et duis enim officia.
        </p>
            <?php
            // déclaration de variable
            $monENTIER = 5 ;
            $monGARAGE = "garage";
            $liste_nombres = [1,2,4,3,6]
            ?>
        <p> j'ai <?php echo $monENTIER; ?> voitures dans mon <?php echo $monGARAGE; ?> </p>

        <ul>
            <?php 
            echo "<li>".$liste_nombres[0]."</li>";
            echo "<li>".$liste_nombres[1]."</li>";
            echo "<li>".$liste_nombres[2]."</li>";
            echo "<li>".$liste_nombres[3]."</li>";
            echo "<li>".$liste_nombres[4]."</li>";
            ?>
        </ul>
    <br>
    Nombre de lignes:<?php echo count($liste_nombres) ; //count: fonction php qui compte les items d'un tableau ?>
    </body>
</html>