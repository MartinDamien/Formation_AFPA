<?php
require "Flottable.php"; // Interface
require "Inflammable.php"; // Interface
require "Bois.php";
require "Dancefloor.php";

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
