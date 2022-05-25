<?php

// echo "SCRIPT_FILENAME:";
// echo $_SERVER['SCRIPT_FILENAME'];
// echo "<br>";
define('_ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
 echo _ROOT;
define('_URL', "http://localhost/AFPA/cinema/");

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
        } else {
            $action();
        }
    } else {
        echo "Fonction n'existe pas";
    }
} else {
    require_once(_ROOT . 'views/home.php');
}
?>

</html>