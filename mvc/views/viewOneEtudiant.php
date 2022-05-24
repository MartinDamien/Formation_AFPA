<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewOneEtudiant</title>
</head>

<body>
    <ul>
        <?php
        echo "<h1>".$result['nom']."</h1>";
        echo "<h2>".$result['prenom']."</h2><hr>";
        echo "<p>".$result['email']."</p>";
        ?>
    </ul>
</body>

</html>