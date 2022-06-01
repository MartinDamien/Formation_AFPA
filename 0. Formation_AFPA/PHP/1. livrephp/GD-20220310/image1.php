<?php
$img = imagecreatetruecolor(400,300);
$gris = imagecolorallocate($img,220,220,220);
$bleu = imagecolorallocate($img,0,0,220);
$rouge = imagecolorallocate($img,220,0,0);
// rempli le fond de l'image imagefill($img,top,left,$gris);
imagefill($img,0,0,$gris);

imagerectangle($img,20,20,200,200,$bleu);
imagefilledrectangle($img,210,220,400,300,$rouge);


imagepng($img,"image.png"); 
// imagegif ; imagejpg

?>
<img src="image.png">
<h1>Bonjour</h1>
