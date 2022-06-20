<?php
require "../outils.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>page php</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php

    // Les operateur php sont les meme que en JS
    // + , - , * , / , %
    // == , === , != , < , > , <= , >=

    $number = [64,54,84,21,54,84,62,15,21,66,88,23,65,48,11,32,51,32,15,95,69,56];
    impair($number);
    ?>
<hr>
<?php
    $filename = "image.png";
    echo substr($filename, 0, 5) ."<br>";
    echo substr($filename, 0, -4) ."<br>";

?>
</body>
</html>