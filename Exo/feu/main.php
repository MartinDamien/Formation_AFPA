<?php
require "Flottable.php"; // Interface
require "inflamable.php"; // Interface
require "Bois.php";
require "Dancefloor.php";


echo"<pre>";
$tab=array();

$b = new Bois();
$d = new Dancefloor();
array_push($tab,$b);
array_push($tab,$d);
print_r($tab);

foreach($tab as $val) {
    $val->enflammer();
    echo "<br>";
}
echo"</pre>";