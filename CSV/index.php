<!DOCTYPE html>
<?php
$pdo = require "../1.connect/connect.php";
require "../1.connect/0.boataout.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV => BDD</title>
</head>

<body>
    <?php


    $file = fopen("csv/produit2.csv", 'r');


    while (!feof($file)) {


        $line = fgetcsv($file, 1024, ";");
        $arrlengh = count($line);
        for ($line < 0; $line < $arrlengh; $line++) {
            $categ = $line[0];
            $nom = $line[1];
            $descr = $line[2];
            $pht = $line[3];
            $tva = $line[4];
            $photo = $line[5];

            return($categ);
            return($nom);
            return($descr);
            return($pht);
            return($tva);
            return($photo);
        }
    }
    fclose($file);





    // $statement = `"CREATE TABLE categorie(
    //     $categ[0] INT AUTO_INCREMENT,
    //     $categ[1] VARCHAR(100),
    //     $categ[2] VARCHAR(255),
    //     $categ[3] INT,
    //     $categ[4] INT,
    //     $categ[5] VARCHAR(100),
    //     PRIMARY KEY($categ[0])
    //     )"`;


    // $sql = $pdo->prepare($statement);
    // $sql->execute();

    ?>
</body>

</html>