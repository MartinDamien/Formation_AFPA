<?php
// session_start();
require_once('models/modelCours.php');

function listeCours()
{
    $result = getCours();
    require('views/viewAllCours.php');
}

function listeUnCours($id)
{
    $result = getUnCours($id);
    require('views/viewOneCours.php');
}

function afficheAddCours()
{
    require('views/viewAddCours.php');
}


function ajoutCours()
{
    addCours($_POST);
}

function afficheModifCours($id)
{
    $result = getUnCours($id);
    require('views/viewModifCours.php');
}

function modifCours($id)
{
    //execute une foontion du modele
    updateCours($id, $_POST);
}
