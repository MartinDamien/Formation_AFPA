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
        <input type="text" name="code" placeholder="code" id="">
        <input type="text" name="titre" placeholder="titre" id="">
        <input type="text" name="langage" placeholder="langage" id="">
        <button type="submit">envoyer</button>
    </form>
</body>
</html>