<!DOCTYPE html>
<?php
require "../1.connect/connect.php";
require "../1.connect/boataout.php";
require "../1.connect/boataclass.php";
?>
<html lang="en">
<head>
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
        <input type="button" value="submit">
    </form>
</body>
</html>