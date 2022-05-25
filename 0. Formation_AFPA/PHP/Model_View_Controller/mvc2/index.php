<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
    <h1><center>Super École</center></h1>
    </header>
    <main>
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
            } else {
                echo "fonction n'existe pas";
            }
        } else {
            echo "controlleur n'existe pas";
            die;
        }
        ?>
    </main>
    <footer>

    </footer>

</body>

</html>