<?php
require_once('model.php');

function addActeur($post){
    $nom = $post['nom'];
    $prenom = $post['prenom'];
    $cover = $post[''];

    $bddPDO = connexionBDD();
    $requete = "INSERT INTO acteur (nom,prenom,cover) VALUES(?,?,?)";
    $stmt = $bddPDO->prepare($requete);
    $stmt->bindParam('nom', $nom, PDO::PARAM_STR);
    $stmt->bindValue('prenom', $prenom, PDO::PARAM_STR);
    $stmt->bindValue('cover', $cover, PDO::PARAM_STR);
    $stmt->execute(array($nom,$prenom,$cover));

    die;
}