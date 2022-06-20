<!DOCTYPE html><?php $pdo = require "../1.connect/connect.php"; require "../1.connect/0.boataout.php"; ?>
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
        $categ = $line[0];
        $nom = $line[1];
        $descr = $line[2];
        $pht = $line[3];
        $tva = $line[4];
        $photo = $line[5];

        
        $inser = $pdo->prepare("CREATE TABLE IF NOT EXISTS categorie(id_categorie INT AUTO_INCREMENT, nom_categorie VARCHAR(100), PRIMARY KEY(id_categorie) );");
        $inser->execute();
        $inser = $pdo->prepare("CREATE TABLE IF NOT EXISTS produit( id_categorie INT, nom_produit VARCHAR(100), description VARCHAR(255), PHT INT, TVA INT, photo VARCHAR(100), FOREIGN KEY(id_categorie) REFERENCES categorie(id_categorie));");
        $inser->execute();

        $inser = $pdo->prepare("SELECT * FROM `categorie` WHERE nom_categorie = ?; ");
        $inser->execute([$categ]);
        if ($inser->rowCount() == 1) {
            $resultat = $inser->fetch();
            $foreignid = $resultat['id_categorie'];
        }else {
            $inser = $pdo->prepare("INSERT INTO categorie (id_categorie, nom_categorie) VALUES (NULL, ?);");
            $inser->execute([$categ]);
            $foreignid = $pdo->lastInsertId();
        }

        $inser = $pdo->prepare("SELECT * FROM `produit` WHERE nom_produit = ?; ");
        $inser->execute([$nom]);
        if ($inser->rowCount() == 1) {
            $resultat = $inser->fetch();
        }else {
            $inser = $pdo->prepare("INSERT INTO produit (id_categorie, nom_produit, description, PHT, TVA, photo) VALUES (?, ?, ?, ?, ?, ?);");
        $inser->execute([$foreignid,$nom,$descr,$pht,$tva,$photo]);
        }

    }fclose($file);
    ?>
</body>

</html>