<?php

// connexion à la base de donnée "db"
$dbname = "tosa" ;  // nom de la Base de Donnée
$dbhost = "localhost" ; //url de host ou 127.0.0.1
$dbuser = "root" ;
$password = "" ;

$pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=UTF8",$dbuser ,$password);
// $pdo est la connection à la BDD 3 arguments pour la PDO (host+dbname , user , password)

$sql = $pdo->prepare("SELECT * FROM user");
$sql->execute();
$rows = $sql->fetchAll();

echo "<pre>";
print_r($rows);
echo "</pre>";

