<?php

require_once('models/model.php');

function getEtudiants()
{
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM etudiants ORDER BY id ASC";
    $resultGetEtudiants = $bddPDO->query($requete);
    return $resultGetEtudiants;
}
