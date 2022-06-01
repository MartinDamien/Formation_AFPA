<?php
require_once "vendor/autoload.php"; 
use mvcobjet\controllers\FrontController;
use mvcobjet\controllers\BackController;

$FrontController = new FrontController();
$BackController = new BackController();

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



// $klein->respond('GET', '/', function () use ($FrontController) {
//     $FrontController->index();
// });

$klein->respond('GET', '/liste', function () use ($FrontController) {
    $res = $FrontController->liste();
    require 'src/views/viewListeActeur.php' ;
});

$klein->respond('GET', '/hello', function () {
    return 'hello world';
});

// $klein->respond('GET', '/addActor', function () {
//     require 'src/views/viewAddActor.php';
// });

// //--------------------------------------------------------------------------------

// $klein->respond('POST', '/addActeur', function ($request) use ($BackController) {
//     $res = $BackController->addActor($request->ParamsPost());
//     require 'src/views/viewAddActor.php';
// });

// $klein->respond('GET', '/getActor/[:lid]', function () use ($BackController) {
//     // on retrouve le parametre de l'url dans l'objet $request géré par klein
//     $BackController->getActor($request->lid);
// });

$klein->dispatch();
