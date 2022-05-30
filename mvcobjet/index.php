<?php
require_once 'vendor/autoload.php';

use mvcobjet\controllers\FrontController;

//rappel autoload
// ainsi je peux creér un instance de mon controller front

$fc = new FrontController();
print_r($fc);
$fc->index;
?>