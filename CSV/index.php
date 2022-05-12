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
    <title>Document</title>
</head>

<body>
    <?php
     

    $file = fopen("csv/produit2.csv", 'r');
    while (!feof($file)) {
        $line[] = fgetcsv($file, 1024, ";");
    }fclose($file);
    
    foreach ($line as $value) {
        $categ = $line[0];
        $nom = $line[1];
        $descr = $line[2];
        $pht = $line[3];
        $tva = $line[4];
        $photo = $line[5];
    }


    debug($categ);

    $table = $pdo->prepare("CREATE TABLE categorie(
    $categ[0] INT AUTO_INCREMENT,
    $categ[1] VARCHAR(100),
    $categ[2] VARCHAR(255),
    $categ[3] INT,
    $categ[4] INT,
    $categ[5],
    PRYMARY KEY($categ[0])
    )");
    $table->execute();


    // if(is_array($line)){
    //     foreach($line as $value){

    //         $fieldVa1 = mysqli_real_escape_string($pdo, $value[0]);
    //         $fieldVa2 = mysqli_real_escape_string($pdo, $value[1]);
    //         $fieldVa3 = mysqli_real_escape_string($pdo, $value[2]);
    //         $fieldVa4 = mysqli_real_escape_string($pdo, $value[3]);
    //         $fieldVa5 = mysqli_real_escape_string($pdo, $value[4]);
    //         $fieldVa6 = mysqli_real_escape_string($pdo, $value[5]);

    //         $query ="INSERT INTO programming_lang (field1, field2, field3) VALUES ( '". $fieldVal1."','".$fieldVal2."','".$fieldVal3."' )";
    //         mysqli_query($pdo, $query);
    //     }
    // }

    ?>
</body>

</html>