<?php
    require_once 'connect.php';

    
    $artiste = $_POST['artiste'];
    $genre = $_POST['genre'];

    echo $genre."<br>";
    echo $artiste;


    $sql = $pdo->prepare("SELECT * FROM artistes");
    $sql->execute();
   