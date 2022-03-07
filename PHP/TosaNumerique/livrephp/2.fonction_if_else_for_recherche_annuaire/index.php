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
    <h1>
        TITRE
    </h1>
    <?php
    
        // Tableau à Clés.

        $annuaire = [
            "alex" => "0298456231",
            "vanessa" => "0298786512",
            "jo" => "0298142536",
        ];

        $annuaire2 = [
            "alex" => "0298456431",
            "julia" => "0298765512",
            "jo" => "0298182536",
        ];

        debug($annuaire);
        // affiche uniquement les clés du tableau
        echo $annuaire["alex"] . "<br>";
        // affiche uniquement les valeur du tableau
        $annuaire["jean"] = "0298748596";
        debug(array_keys($annuaire));

        verifie("jo",$annuaire);
        verifie("julia",$annuaire2);
        verifie("fred",$annuaire2);

        //  if (array_key_exists("Vanessa",$annuaire)) {
        //      echo "Vannessa existe et son numero est: ". $annuaire["Vanessa"];
        //  } else {
        //      echo "Vannessa n'existe pas";
        //  }

            foreach($annuaire2 as $key => $value) {
                echo "le numero de $key est $value <br>";
            }

    ?>
</body>

</html>