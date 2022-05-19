<?php
require_once('model.php');

function getEtudiants()
{
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM student ORDER BY id ASC";
    $result = $bddPDO->query($requete);
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getUnEtudiants($id)
{
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM student WHERE id =?";
    $stmt = $bddPDO->query($requete);
    $data = $stmt->execute(array($id));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($data);
    return $data;
}