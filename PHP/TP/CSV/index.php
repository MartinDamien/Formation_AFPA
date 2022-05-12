<!DOCTYPE html>
<?php
    require "connect.php";
    require "../../0.boataout.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <form action="index.php" method="post" enctype="multipart/form-data">
        upload CSV:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submit">
    </form> -->
    <?php
     

    $file = fopen("csv/produit2.csv", 'r');
    while (!feof($file)) {
        $line[] = fgetcsv($file, 1024, ";");
    }
    fclose($file);
    $arrlength = count($line);

    foreach ($line as $value) {
        $categ = $line[0];
        $nom = $line[1];
        $descr = $line[2];
        $pht = $line[3];
        $tva = $line[4];
        $photo = $line[5];
    }


    debug($categ);


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