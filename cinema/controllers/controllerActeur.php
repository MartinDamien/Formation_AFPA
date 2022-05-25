<?php
require('models/modelActeur.php');

function nouvelleActeur()
{
    require('views/viewAddActeur.php');
    addActeur($_POST);
}

function afficheActeur()
{
    require('views/viewActeur.php');
    affiche();
}
