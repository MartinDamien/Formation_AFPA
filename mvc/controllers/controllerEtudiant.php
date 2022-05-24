<?php
require_once('models/modelEtudiant.php');

function ditBonjour()
{
    echo "Bonjour";
}

function listeEtudiant()
{
    $result = getEtudiants();
    require('views/viewAllEtudiant.php');
}

function listeUnEtudiant($id)
{
    $result = getUnEtudiant($id);
    require('views/viewOneEtudiant.php');
}

function afficheAddEtudiant()
{
    require('views/viewAddEtudiant.php');
}


function ajoutEtudiant()
{
    addEtudiant($_POST);
}

function afficheModifEtudiant($id)
{
    $result = getUnEtudiant($id);
    require('views/viewModifEtudiant.php');
}

function modifEtudiant($id)
{
    //execute une foontion du modele
    updateEtudiant($id, $_POST);
}
function suprimeEtudiant($id)
{
    delEtudiant($id);
}
