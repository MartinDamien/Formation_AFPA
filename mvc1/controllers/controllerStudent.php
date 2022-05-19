<?php
require_once('models/modelstudents.php');

function ditBonjour()
{
    echo "Bonjour";
}

function listeEtudiant()
{
    $result = getEtudiants();
    print_r($result);
}
