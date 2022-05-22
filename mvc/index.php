<?php

if ($_GET['action']) {

    $params = explode("/", $_GET["action"]);
    $controller = $params[0];
    // $arg = $params[2];



    if (isset($params[1])) {
        $action = $params[1];
    }
    require_once('controllers/' . $controller . '.php');

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
        require_once('controllers/controllerEtudiant.php');
        listeEtudiant();
    }
}
