<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <a href="http://localhost/AFPA/mvc/controllerEtudiant">Etudiant</a>
        <li><a href="http://localhost/AFPA/mvc/controllerEtudiant/listeEtudiant">liste Etudiant</a></li>
        <li><a href="http://localhost/AFPA/mvc/controllerEtudiant/afficheAddEtudiant">ajout Etudiant</a></li>
    </ul>
    <ul>
    <a href="http://localhost/AFPA/mvc/controllerCours">Cours</a>
        <li><a href="http://localhost/AFPA/mvc/controllerCours/listeCours">liste Cours</a></li>
        <li><a href="http://localhost/AFPA/mvc/controllerCours/afficheAddCours">ajout Cours</a></li>
    </ul>
    <ul>
        <a href="http://localhost/AFPA/mvc/controllerInscription">Inscription</a>
    </ul>
    
<hr>
</body>
<?php

echo "SCRIPT_FILENAME:";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
$root = str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']);
define('_ROOT', $root);
define('_URL',"http://localhost/afpa/mvc");

if ($_GET['action']) {

    $params = explode("/", $_GET["action"]);
    $controller = $params[0];
    // $arg = $params[2];



    if (isset($params[1])) {
        $action = $params[1];
    }
    require_once(_ROOT . 'controllers/' . $controller . '.php');

    if (function_exists($action)) {
        if (isset($params[2]) && isset($params[3]) && isset($params[4])) {
            $action($params[2], $params[3], $params[4]);
        } elseif (isset($params[2]) && isset($params[3])) {
            $action($params[2], $params[3]);
        } elseif (isset($params[2])) {
            $action($params[2]);
        } elseif (!isset($params)) {
            echo "fonction n'existe pas";
        } else {
            $action();
        }
    } else {
        require_once(_ROOT . 'controllers/controllerEtudiant.php');
        listeEtudiant();
    }
}
?>

</html>