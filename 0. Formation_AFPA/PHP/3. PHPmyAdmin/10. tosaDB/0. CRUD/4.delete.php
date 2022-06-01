<?php
require "connect.php";

$sql = $pdo->prepare("DELETE FROM user WHERE id = 5 ");