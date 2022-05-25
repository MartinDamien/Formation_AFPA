<?php
require('models/modelFilm.php');

function nouveauFilm()
{
    require('views/viewAddFilm.php');
    addFilm($_POST);
}
