<?php
require_once('..\models\model.php');

function ditBonjour()
{
    echo "Bonjour";
}

function listeEtudiant()
{
    $result = getEtudiants();
    print_r($result);
}
