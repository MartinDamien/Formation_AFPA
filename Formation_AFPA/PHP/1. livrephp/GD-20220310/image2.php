<?php
header("content-type:image/png");
$img = imagecreatetruecolor(400,300);
imagepng($img);
?>