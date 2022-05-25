<?php
require('models/modelFilm.php');

function nouveauFilm()
{
    require('views/viewAddFilm.php');
    addFilm($_POST);
}

function affiche()
{
    $result = afficheFilm();
    require('views/viewFilm.php');
}