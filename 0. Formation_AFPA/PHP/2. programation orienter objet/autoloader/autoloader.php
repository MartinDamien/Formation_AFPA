<!DOCTYPE html>
<html lang="Fr">
<head>
    <?php
    function chargerClasse($classe)
    {
        require $classe . '.php'; //on inclut la classse correspondante
    }

    spl_autoload_register('chargerClasse');

    $perso = new Personnage("polo", "jean", 66);
    $perso->parler("ESSAIS");
    echo "<br/>";

    $employe = new Employe("x", "y", 5);
    $employe->parler("enmp");
    echo "<br/>";

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>