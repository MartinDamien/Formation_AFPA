<?php

require("specialite.php");
require("professeur.php");

$prof = new Professeur(1,"Smith","John","email@email.fr");
$prof->addspecialite("001","JAVA");
$prof->addspecialite("002","Smalltalk");

$prof->afficheSpecialite();