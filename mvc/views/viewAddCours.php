<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewAddCours</title>
</head>
<body>
    <form action="../controllerCours/ajoutCours" method="POST">
        <input type="text" name="nom" placeholder="nom" id="">
        <input type="text" name="prenom" placeholder="prenom" id="">
        <input type="text" name="email" placeholder="email" id="">
        <input type="text" name="password" placeholder="password" id="">
        <button type="submit">envoyer</button>
    </form>
</body>
</html>