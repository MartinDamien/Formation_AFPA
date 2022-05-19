<?php
function chargerClasse($classe)
{
    require $classe . '.php'; //on inclut la classse correspondante
}

spl_autoload_register('chargerClasse');

$perso = new Personnage("polo", "jean", 66);
$perso->parler("ESSAIS");

$employe = new Employe("x", "y", 5);
$employe->parler("enmp");
