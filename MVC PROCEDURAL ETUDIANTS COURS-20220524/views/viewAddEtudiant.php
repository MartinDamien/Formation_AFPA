<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajout d'un étudiant</h1>
    <form action="../controllerEtudiant/ajouteEtudiant" method="POST">
        <input type="text" name="nom" placeholder="votre nom"><br>
        <input type="text" name="prenom" placeholder="votre prenom"><br>
        <input type="submit" vaue="enregistrer">
    </form>
</body>
</html>