<?php
require "connect.php";

$sql = $pdo->prepare("UPDATE user SET password = 'autrepass' WHERE email = 'jam@gmail.com'");
$sql->execute();