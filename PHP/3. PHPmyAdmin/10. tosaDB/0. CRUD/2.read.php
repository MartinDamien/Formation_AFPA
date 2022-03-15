<?php
require "connect.php";

$sql = $pdo->prepare("INSERT INTO user(id,email,password,nom,prenom) VALUE(NULL,'jam@gmail.com','passxxx','cavarec','Jam')");
$sql->execute();

echo "<pre>";
print_r($rows);
echo "</pre>";