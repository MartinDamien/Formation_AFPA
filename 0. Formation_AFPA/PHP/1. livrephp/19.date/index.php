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
    <style>
        body {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 40%, rgba(255,0,0,1) 100%);
            color: white;
        }
    </style>
</head>
<body>
<?php

// echo "nombres de secondes depuis le 1er janvier 1970". time()."<br>";
    // timestamp
// echo "<pre>";
// print_r(getdate());
// echo "</pre>";
// $unedate = strtotime('2019-01-25'); //transforme une date string en timestamp
// echo "<pre>";
// print_r(getdate($unedate));
// echo "</pre>";
echo date('d/m/Y')."<br>";
echo date('d/m/y')."<br>";
?>
</body>

</html>