<?php
// php : json_encode (encode un objet PHP pour transfert vers client) : encode.php
$montableau = array("name"=>"John","age"=>30,"city"=>"New-York") ;
$renvoi = json_encode($montableau) ; 
echo $renvoi ;
