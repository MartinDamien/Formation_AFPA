<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<header>

</header>
<main>
<?php
    if ($_GET['action']) {
        $params = explode("/", $_GET['action']);
        $controller = $params[0];
        if(isset($params[1])){ $action = $params[1];}
        require_once('controllers/'.$controller.'.php');
        if(function_exists($action)){
            $action(); //ditBonjour();
        }



    }else{ echo "pas de controllers"; }

?>
</main>
<footer>

</footer>

    
</body>
</html>
