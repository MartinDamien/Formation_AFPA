<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alchimie</title>
</head>
<body>
    <?php
require "head.php";
require "body.php";
require "tronc.php";
require "jambes.php";

$tete = new Head($_POST["yeux"],$_POST["nez"],$_POST["bouche"]);
$tronc = new Tronc($_POST["corpulance"],$_POST["couleur"]);
$jambes = new Jambes($_POST["taille"],$_POST["poilue"]);
$corp = new Body($tete,$tronc,$jambes);


echo "<pre>";
print_r($corp);
echo "</pre>";

echo "couleur des yeux : ".($corp->getYeux());
?>
</body>
</html>
