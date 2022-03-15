<?php
require "../outils.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>page php</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

function caisse_enregistreuse($tableau){
    $prixtotal = 0;
    foreach($tableau as $nom => $produit){
        $prixfinale = $produit["qte"]*$produit["prix"];
        echo "Les ".$produit["qte"]." ".$nom." coute: $prixfinale$.<br>";
        $prixtotal = $prixtotal +($produit["qte"]*$produit["prix"]);
        echo " Le prix total est de: $prixtotal$. <br>";
    };
};

$produit = [
    "pommes"=>["qte"=>10,"prix"=>4],
    "oranges"=>["qte"=>12,"prix"=>3],
];
echo $produit['pommes']['prix']."<br>";
caisse_enregistreuse($produit);

?>
<hr>

<?php

$utilisateru = [
    ["nom"=>"jean","mail"=>"jean@gmail.com"],
    ["nom"=>"jo","mail"=>"jo@gmail.com"],
    ["nom"=>"pol","mail"=>"pol@emploi.fr"],
];


$jo = $utilisateru[1];
echo $jo["mail"]."<br>";
echo $utilisateru[1]["mail"]."<br>";

?>
<hr>
<?php

$a = 5;
echo gettype($a)."<br>";
$b = "mot";
echo gettype($b)."<br>";
$c = 5.5;
echo gettype($c)."<br>";

echo 3 + "4toto"."<br>";

function mult($x,$y){
    return $x*$y;
};
echo "function mult2(x,y){"."<br>";
echo mult(2,5)."<br>";
echo mult(2,5.2)."<br>";

function mult2($x,$y):int{
    return $x*$y;
};
echo "function mult2(x,y):int{"."<br>";
echo mult2(2,5)."<br>";
echo mult2(2,5.2)."<br>";


?>
</body>
</html>