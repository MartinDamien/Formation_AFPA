<?php

require "utilisateur.php";

try {
    $u1 = new Utilisateur("George", "homme", "31");
    $u1->setGenre($g = "helicoptere");
    echo "<pre>";
    print_r($u1);
    echo "</pre>";
} catch (Exception $e) {
    echo "erreur ! " . $e->getMessage();
}
