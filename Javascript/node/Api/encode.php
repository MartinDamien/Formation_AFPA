<?php
// serveur de donnée JSON en php
// placer ce programe php dans htdocs/afpa/api/encode.php (ou votre chemin)
// et demarrer le serveur apashe
header("access-control-allow-origin: *");
$montableau = array("nom" => "Dupont", "age" => "35", "ville" => "Paris");
$monjson = json_encode($montableau);
echo $monjson;
?>