<?php
require "../outils.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>user</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    </style>
</head>
<body>
    <form action="record.php" method="POST">

        <label for="email">email :</label>
        <input type="email" name="email" placeholder="em@il" id="" required><br>

        <label for="nom">nom :</label>
        <input type="text" name="nom" placeholder="nom" id="" ><br>

        <label for="prenom">prenom :</label>
        <input type="text" name="prenom" placeholder="prenom" id="" ><br>

        <label for="telephone">telephone :</label>
        <input type="tel" name="telephone" placeholder="telephone" id="" ><br>

        <label for="nrue">N° Rue :</label>
        <input type="number" name="nrue" placeholder="N° Rue" id="" ><br>

        <label for="nomrue">Nom Rue :</label>
        <input type="text" name="nomrue" placeholder="Nom Rue" id="" ><br>

        <label for="codepostal">code postal :</label>
        <input type="number" name="codepostal" placeholder="codepostal" id="" ><br>

        <label for="ville">Ville :</label>
        <input type="text" name="ville" placeholder="Ville" id="" ><br>

        <button type="submit">Enregistrer</button>
    </form>
</body>

</html>