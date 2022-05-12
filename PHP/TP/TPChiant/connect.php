<?php

    $servername = 'localhost';
    $tablename = 'table_name';
    $username = 'root';
    $password = '';

    //On établie la connection avec la BDD
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$tablename", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Connexion réussie </br>';
    }

    /*On capture les exceptions si une exception est lancée et on affiche
              *les informations relatives à celle-ci*/ catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
