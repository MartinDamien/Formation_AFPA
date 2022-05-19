<?php
if ($_GET['action']) {
    $params = explode("/", $_GET['action']);
    $controller = $params[0];
    if (isset($params[1])) {
        $action = $params[1];
    }
    require_once('controllers/' . $controller . '.php');
    if (function_exists($action)) {
        $action(); //ditBonjour();
    }
} else {
    echo "pas de controllers";
}