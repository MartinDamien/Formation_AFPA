<?php
require_once('model.php');

function getEtudiants()
{
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM etudiant ORDER BY id ASC";
    $resultGetEtudiant = $bddPDO->query($requete);
    $data = $resultGetEtudiant->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getUnEtudiant($id)
{
    $bddPDO = connexionBDD();
    $req = "SELECT * FROM etudiant WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($id));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function addEtudiant($etu)
{
    // echo "<pre>";
    // print_r($etu);
    // echo "</pre>";
    $n = $etu['nom'];
    $p = $etu['prenom'];
    $e = $etu['email'];
    $pass = $etu['password'];

    $bddPDO = connexionBDD();
    $requete = "INSERT INTO etudiant (nom,prenom,email,password) VALUES(?,?,?,?)";
    $stmt = $bddPDO->prepare($requete);
    $stmt->execute(array($n, $p, $e, $pass));

    die;
}

function updateEtudiant($id, $post)
{
    $n = $post['nom'];
    $p = $post['prenom'];
    $e = $post['email'];
    $pass = $post['password'];

    $bddPDO = connexionBDD();
    $requete = "UPDATE etudiant SET nom=?,prenom=?,email=?,password=? WHERE id =$id";
    $stmt = $bddPDO->prepare($requete);
    $stmt->execute(array($n, $p, $e, $pass));
}
