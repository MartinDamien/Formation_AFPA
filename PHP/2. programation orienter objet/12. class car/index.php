<!DOCTYPE html>
<?php
require 'car.php';
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $c1 = new car("", "", "", "", "");
    $c1->setmodele("bmw");
    $c1->setcouleur("rouge");
    $c1->setannee(2015);
    $c1->setenergie("electrique");
    $c1->setkilometrage(100000);

    echo '
    <pre>';
    print_r($c1);
    echo '</pre>';
    ?>
</body>

</html>