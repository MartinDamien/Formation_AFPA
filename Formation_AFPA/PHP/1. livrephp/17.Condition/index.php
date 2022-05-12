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
        table{
            border:1px  solid;
            border-color: grey;
        }
    </style>
</head>
<body>
<?php

$x = 67 ;

if ($x < 5) {
    echo "$x est inférieur à 5" ."<br>";
} elseif ( $x < 50 )  {
    echo "$x est supérieur ou égal à 5 et inférieur à 50"."<br>";
} else {
    echo "$x supérieur ou égal à 50" ."<br>";
}

?>
<hr>
<?php

$y = 67;
// si la condition ($y > 0) est vrai ET la condition ($y<100) est vrai => Vrai
if( ($y > 0) and ($y<100) OR ($y = 333) ){
    echo "tout est bon"."<br>";
} else {
    echo "tout est faux"."<br>";
}

if (!($y == 334)) {
    echo "pas égal à 334"."<br>";
}

?>
</body>

</html>