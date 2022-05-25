<?php
require('models/modelActeur.php');

function nouvelleActeur()
{
    require('views/viewAddActeur.php');
    addActeur($_POST);
}

function affiche()
{
    $result = afficheActeur();
    require('views/viewActeur.php');
    
}
