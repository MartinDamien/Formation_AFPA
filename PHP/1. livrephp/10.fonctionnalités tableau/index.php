<?php
require "../outils.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page PHP</title>
</head>
<body>
    <?php

        // déclaration de variable
        $monENTIER = 5 ;
        $monGARAGE = "garage";
        $liste_nombres = [1,2,4,3,6];
        $ajout = [1,5,4,8];
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
    <hr>
        Nombre de lignes:<?php echo count($liste_nombres) ; //count: fonction php qui compte les items d'un tableau ?>
    <br><p>
        premier element: <?php echo reset ($liste_nombres); ?> <br>
        dernier element: <?php echo end ($liste_nombres); ?> <br>
    <hr>

    <?php
    
        echo "<strong>push</strong><br>Empile un ou plusieurs éléments à la fin d'un tableau";
        array_push($liste_nombres,7);   // Empile un ou plusieurs éléments à la fin d'un tableau
        debug($liste_nombres);

        echo "<strong>pop</strong><br>Dépile un élément de la fin d'un tableau";
        array_pop($liste_nombres);  // Dépile un élément de la fin d'un tableau
        debug($liste_nombres);

        echo "<strong>unshift</strong><br>Empile un ou plusieurs éléments au début d'un tableau";
        array_unshift($liste_nombres,18);  // Empile un ou plusieurs éléments au début d'un tableau
        debug($liste_nombres);

        echo "<strong>unshift</strong><br>suprime le 1er element du tableau";
        array_unshift($liste_nombres);  // suprime le 1er element du tableau
        debug($liste_nombres);

        echo "<strong>unset</strong><br>détruit la ou les variables dont le nom a été passé";
        unset($liste_nombres[2]);  // détruit la ou les variables dont le nom a été passé
        debug($liste_nombres);

        echo "<strong>sort</strong><br>Trie un tableau en ordre croissant";
        sort($liste_nombres);  // Trie un tableau en ordre croissant
        debug($liste_nombres);

        echo "<strong>merge</strong><br>rassemble les éléments d'un ou de plusieurs tableaux en ajoutant les valeurs de l'un à la fin de l'autre";
        $une_autre_liste = array_merge($liste_nombres,$ajout);  //  rassemble les éléments d'un ou de plusieurs tableaux en ajoutant les valeurs de l'un à la fin de l'autre
        debug($une_autre_liste);

        /*
        en JavaScript :
        for {var i = o ; i < tab.lenght ; i++} {
            // action
            console.log(tab[i])

        En php : pas de devlaration de variable
        i = $i
        en php  count permet de compter les élément d'un tableau
        en php  console.log est remplacé par print_r ou echo
        */


        //  echo "<ul>";
        //  for ($ind = 0; $ind <count($liste_nombres); $i++){
        //      echo "<li>".$liste_nombres[$ind] . "</li>";
        //  };
        //  echo "</ul>";

    ?>
</body>
</html>