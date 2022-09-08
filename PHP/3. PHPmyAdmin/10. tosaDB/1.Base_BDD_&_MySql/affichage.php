<?php


try {


    $connection = new PDO("mysql:host=localhost;dbname=1_Premiere", "root", "");

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    // on crée un object de connection a la base de données

    $sql = "SELECT * FROM employe;";

    // on crée sous forme de chaine de caractère la requête sql (langage de Mysql). 

    $stmt = $connection->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";

    print_r($result);

    echo "</pre>";
} catch (PDOException $e) {
    echo $e->getMessage();
}
