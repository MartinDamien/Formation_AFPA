<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>viewAddEtudiant</title>
</head>

<body>
    <header>

    </header>
    <main>
        <form action="../controllerEtudiant/ajoutEtudiant" method="POST">
            <input type="text" name="nom" placeholder="nom" id="">
            <input type="text" name="prenom" placeholder="prenom" id="">
            <input type="text" name="email" placeholder="email" id="">
            <input type="text" name="password" placeholder="password" id="">
            <button type="submit">envoyer</button>
        </form>
    </main>
    <footer>

    </footer>

</body>

</html>