<!DOCTYPE html> <?php require_once 'connect.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php
        $compter = $pdo->prepare("SELECT COUNT(id) FROM voiture as total; ");
        $compter->execute();


        $citroen= $pdo->prepare("SELECT COUNT(id) FROM voiture where id_marque = 1;");
        $citroen->execute();
        $peugeot= $pdo->prepare("SELECT COUNT(id) FROM voiture where id_marque = 2;");
        $peugeot->execute();
        $renault= $pdo->prepare("SELECT COUNT(id) FROM voiture where id_marque = 3;");
        $renault->execute();

        echo $compter['total']
        ?>
    
</body>
</html>