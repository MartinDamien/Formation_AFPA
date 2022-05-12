<?php
$json = file_get_contents("bourse.json");

$parsed_json = json_decode($json);

$date_jour = $parsed_json->{'response'}->{'features'}->{'date'};

$heure_cac40    = $parsed_json->{'cotation_bourse'}[0]->{'bourse'}->{'heure'};
$minute_cac40   = $parsed_json->{'cotation_bourse'}[0]->{'bourse'}->{'minute'};
$nom_compagnie  = $parsed_json->{'cotation_bourse'}[0]->{'total'}->{'compagnie'};
$cotation_total = $parsed_json->{'cotation_bourse'}[0]->{'total'}->{'cotation'};
$tendance_total = $parsed_json->{'cotation_bourse'}[0]->{'total'}->{'tendance'};

 echo "Le ${date_jour} à ${heure_cac40} h ${minute_cac40}, la cotation de ${nom_compagnie} 
 est de ${cotation_total} et sa tendance de ${tendance_total} %n";
?>