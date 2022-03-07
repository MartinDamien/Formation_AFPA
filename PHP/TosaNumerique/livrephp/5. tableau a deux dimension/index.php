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

function tabdouble($t){
    foreach($t as $v){
       foreach($v as $i){
         echo $i*2;
       };
    };
};



$tab2d = [
    [1,2,3],
    [4,5,6],
    [2,4,6],
    [8,10,12],
];



  $ligne1 = $tab2d[0];
  debug($ligne1);
  echo $ligne1[1]."<br>";
  echo $tab2d[1][2]."<br>";

echo "<pre>";
tabdouble($tab2d);
?>
</body>
</html>