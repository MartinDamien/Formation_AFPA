<?php
//start session
session_start();
if (isset($_SESSION['sus_user_id']) && $_SESSION['sus_user_id'] != "") {
    echo ('Bienvenue');
    echo '<h4><a href="logout.php">Logout</a></h4>';
}

// echo "SCRIPT_FILENAME:";
// echo $_SERVER['SCRIPT_FILENAME'];
// echo "<br>";
define('_ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('_URL', "http://localhost/AFPA/mvc/");

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