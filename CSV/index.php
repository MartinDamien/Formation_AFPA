<!DOCTYPE html><?php $pdo = require "../1.connect/connect.php";
                require "../1.connect/0.boataout.php"; ?>
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
        $arraylengh = count($line);
        for ($line < 0; $line < $arraylengh; $line++) {
            $categ = $line[0];
            $nom = $line[1];
            $descr = $line[2];
            $pht = $line[3];
            $tva = $line[4];
            $photo = $line[5];
        }
        
        // transition de la boucle for a l'INSERT
        // voir les bindValue

        $inser = $pdo->prepare("CREATE TABLE IF NOT EXISTS categorie(categorie VARCHAR(100) , nom_produit VARCHAR(100), description VARCHAR(255), PHT INT, TVA INT, photo VARCHAR(100))");
        $inser->execute();
        $inser = $pdo->prepare("INSERT INTO `categorie` (`categorie`, `nom_produit`, `description`, `PHT`, `TVA`, `photo`) VALUES ('?', '?', '?', '?', '?', '?');");
        $inser->query('$categ,$nom,$descr,$pht,$tva,$photo');
    }
    fclose($file);

    ?>
</body>

</html>

// $statement = `"CREATE TABLE IF NOT EXISTS categorie(
// $categ[0] INT AUTO_INCREMENT,
// $categ[1] VARCHAR(100),
// $categ[2] VARCHAR(255),
// $categ[3] INT,
// $categ[4] INT,
// $categ[5] VARCHAR(100),
// PRIMARY KEY($categ[0])
// )"`;


// $sql = $pdo->prepare($statement);
// $sql->execute();