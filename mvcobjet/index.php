<?php
require_once 'vendor/autoload.php';

use mvcobjet\controllers\FrontController;

//rappel autoload
// ainsi je peux creér un instance de mon controller front

$fc = new FrontController();

//instentation d'un objet klein
$klein = new \Klein\klein();

// klein->respond('GET','function(){
//     $frontController->index();
// }')

klein->respond('GET','function(){
    $frontController->index();
}')

$klein->dispatch();