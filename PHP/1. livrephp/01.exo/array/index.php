<?php 
function debug($l) {
    echo "<pre>";
    print_r($l) ;   
    echo "</pre>"; 
}

$annuaire = [
    "Julia" => "0234334455",
    "Roger" => "0234344553",
    "Polo"  => "0234334433"
];

debug($annuaire);
echo $annuaire["Roger"] ;
// renvoi les clés de $annuaire. 
debug(array_keys($annuaire));
debug(array_values($annuaire));
// On sait que array_keys ou array_values ramènent des listes donc 
// on peut faire un debug sur chacune de ces variables

// Il existe une fonction PSP qui permet de vérifier si une clé existe
if (array_key_exists("Polo",$annuaire)){
    echo "Polo existe" ;
} else {
    echo "no exist Polo" ;
};