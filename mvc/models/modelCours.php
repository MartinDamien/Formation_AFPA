<?php
require_once('model.php');

function getCours()
{
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM cours ORDER BY id_cours ASC";
    $resultGetCours = $bddPDO->query($requete);
    $data = $resultGetCours->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getUnCours($id)
{
    $bddPDO = connexionBDD();
    $req = "SELECT * FROM cours WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($id));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function addCours($cours)
{
    $idc = $cours['id_cours'];
    $c = $cours['code'];
    $t = $cours['titre'];
    $l = $cours['langage'];

    $bddPDO = connexionBDD();
    $requete = "INSERT INTO cours (id_cours,code,titre,langage) VALUES(?,?,?,?)";
    $stmt = $bddPDO->prepare($requete);
    $stmt->execute(array($idc, $c, $t, $l));

    die;
}

function updateCours($id, $cours)
{
    $idc = $cours['id_cours'];
    $c = $cours['code'];
    $t = $cours['titre'];
    $l = $cours['langage'];

    $bddPDO = connexionBDD();
    $requete = "UPDATE cours SET id_cours=?,code=?,titre=?,langage=? WHERE id =$id";
    $stmt = $bddPDO->prepare($requete);
    $stmt->execute(array($idc, $c, $t, $l));
}