<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $img = imagecreatetruecolor(400,300);
    $gris = imagecolorallocate($img,220,220,220);
    $bleu = imagecolorallocate($img,0,0,220);


    //rempli le fond de l'image imagefill($img,top,lef,$gris)
    imagefill($img,0,0,$gris);

    $img2 = imagecreatefrompng("votreimage.png");
    imagecopy($img,$img2,10,10,0,0,100,100);

    imagepng($img,"image.png");
    // imagegif ; imagejpg

    ?>
<img src="imge.png" alt="" srcset="">
<h1>Bonjour</h1>
</body>
</html>
