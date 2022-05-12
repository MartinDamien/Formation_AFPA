<?php

    require 'config.php';

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";


    //On établie la connection avec la BDD
    try {//On définit le mode d'erreur de PDO sur Exception
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        
        $pdo = new PDO($dsn, $user, $password, $options);

        if ($pdo) {
            echo "Connexion à la base de donnée $db reussi";
        }
    }catch (PDOException $e) {// On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci*/
        echo "Erreur : " . $e->getMessage();
    }
