<?php
require_once('models/modelstudents.php');

function ditBonjour()
{
    echo "Bonjour";
}


function listeEtudiant()
{
    $result = getEtudiants();
    require('view/viewAllStudent.php');
}
