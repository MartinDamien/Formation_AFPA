<?php

// Total d'une liste de nombre
function total($ln){
    $total = 0 ;
    foreach($ln as $nombre) {
        $total = $total + $nombre ;
    }
    return $total;
};

// debug une variable ou tableau
function debug($variable)
{
    echo "<pre>";
    print_r($variable);
    echo "</pre>";
}

// verificcation de (presence dans) liste
function verifie($prenom, $un_annuaire) {
    if(array_key_exists($prenom,$un_annuaire)) {
        echo "$prenom existe et son numero est: $un_annuaire[$prenom] <br>";
    } else { echo "$prenom n'existe pas <br>"; }
}


function impair($l) {
    foreach($l as $n){
        if (($n%2)!= 0) {
            echo "$n est impair <br>";
        } else echo "$n est pair <br>";
    }
}

function bonjour($prenom = "Karen",$role = "visiteur"){
    echo "bonjour $prenom, vous etes $role";
}

function plus3($p){
    $p = $p+3;
    return $p;
}

?>