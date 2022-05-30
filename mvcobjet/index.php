<?php
require_once 'vendor/autoload.php';

use mvcobjet\controllers\FrontController;

$base  = dirname($_SERVER['PHP_SELF']);
if (ltrim($base, '/')) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

//rappel autoload
// ainsi je peux creér un instance de mon controller front

$frontController = new FrontController();

//instentation d'un objet klein
$klein = new \Klein\Klein();

$klein->respond('GET','/',function() use ($frontController){
    $frontController->index();
});

$klein->respond('GET', '/helloworld',function(){
    return 'hello world';
});

$klein->dispatch();
