<?php
require('models/modelActeur.php');

function nouvelleActeur()
{
    require('views/viewAddActeur.php');
    addActeur($_POST);
}

function afficheActeur()
{
    $result = affiche();
    require('views/viewActeur.php');
    
}
