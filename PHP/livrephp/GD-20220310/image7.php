<?php
$img = imagecreatetruecolor(400,300);
$gris = imagecolorallocate($img,220,220,220);
// rempli le fond de l'image imagefill($img,top,left,$gris);
imagefill($img,0,0,$gris);

$img2 = imagecreatefrompng("./afpa.png");
// insertion de $img2 dans $img1 a la position x=10, y=10 , à partir x=0,y=0 de $img2
// sur la taille largeur(100) / hauteur(55). 
imagecopy($img,$img2,10,10,0,0,100,55);

imagepng($img,"image.png"); 
// imagegif ; imagejpg

?>
<img src="image.png">
<h1>Bonjour</h1>