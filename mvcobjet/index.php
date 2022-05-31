<?php
require_once "vendor/autoload.php"; 
use mvcobjet\controllers\FrontController;
use mvcobjet\controllers\BackController;

$frontController = new FrontController();
$backController = new BackController();

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
// elle sera executé quand on tapera dans l'url le chemin jusqu'a la racine
$klein->respond('GET', '/', function () use ($frontController) {
    $frontController->index();
});

$klein->respond('GET', '/liste', function () use ($backController) {
    $backController->liste();
});

$klein->respond('GET', '/hello', function () {
    return 'hello world';
});

$klein->respond('GET', '/getActeur/[:lid]', function () use ($backController) {
    // on retrouve le parametre de l'url dans l'objet $request géré par klein
    $backController->getActeur($request->lid);
});

$klein->dispatch();
