<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    $pdo = require "../1.connect/connect.php";
    require "../1.connect/boataout.php";
    require "utilisateur.php";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="nom">nom :<br>
            <input type="text" name="nom" id="nom" placeholder="john"><br>
        </label>
        <label for="nom">prenom :<br>
            <input type="text" name="prenom" id="prenom" placeholder="smith"><br>
        </label>
        <label for="nom">password :<br>
            <input type="password" name="password" id="password" placeholder=""><br>
        </label>
        <button>
            go
        </button>
    </form>
    <?php

    $pnom = $_POST['nom'];
    $pprenom = $_POST['prenom'];
    $ppassword = $_POST['password'];

    $user = new utilisateur($pnom,$pprenom,$ppassword);
    debug($user);

    ?>
</body>

</html>