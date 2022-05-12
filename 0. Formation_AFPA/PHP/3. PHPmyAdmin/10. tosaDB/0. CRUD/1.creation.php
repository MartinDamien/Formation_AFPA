<?php
require "connect.php";

$sql = $pdo->prepare("SELECT * FROM user WHERE id = 1");
$sql->execute();
$row = $sql->fetch();
