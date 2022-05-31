<?php
require_once('vendor/autoload.php');



$frontController = new mvcobjet\controllers\FrontController();
$backController = new mvcobjet\controllers\BackController();

$base  = dirname($_SERVER['PHP_SELF']);
if (ltrim($base, '/')) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

//rappel autoload
// ainsi je peux creér un instance de mon controller front


//instentation d'un objet klein
$klein = new \Klein\Klein();

// je crée une closure avec l'objet $FrontController qui dera utiliser
// plus tard quand la fonction de callback sera executé
// 
$klein->respond('GET', '/', function () use ($frontController) {
    $frontController->index();
});

$klein->respond('GET', '/liste', function () use ($backController) {
    $backController->liste();
});

$klein->respond('GET', '/helloworld', function () {
    return 'hello world';
});

$klein->dispatch();
