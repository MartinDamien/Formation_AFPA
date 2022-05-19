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
        if (isset($params[2]) && isset($params[3])) {
            $action($params[2], $params[3]);
        } elseif (isset($params[2])) {
            $action($params[2]);
        } else {
            $action();
        }
    }
} else {
    echo "controlleur n'existe pas";
}
