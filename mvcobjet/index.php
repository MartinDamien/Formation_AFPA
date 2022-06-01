<?php
require_once "vendor/autoload.php";

use mvcobjet\controllers\FrontController;
use mvcobjet\controllers\BackController;

// rappel autoload 
// ainsi je peux créer une instance de mon controller front 


$frontController = new FrontController();
$backController = new BackController();

$base  = dirname($_SERVER['PHP_SELF']);
if (ltrim($base, '/')) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

// instanciation d'un objet klein 
$klein = new \Klein\Klein();

// je cré une closure avec l'objet $fronController qui sera utilisé 
// plus tard quand la fonction de callback sera executée. 
// Elle sera executée quand on tapera dans l'URL  le chemin jusqu'a la racine .
$klein->respond('GET', '/', function () use ($frontController) {
    // $frontController->index();
});

$klein->respond('GET', '/listeActeurs', function () use ($frontController) {
    $res = $frontController->listeActeurs();
    require 'src/views/viewListeActeur.php';
});

$klein->respond('GET', '/getActeur/[:lid]', function ($request) use ($backController) {
    // on retrouve la parametre de l'url dans l'objet $request géré par klein. 
    $res = $backController->getActor($request->lid);
    echo "<pre>";
    print_r($res);
    echo "</pre>";
});

$klein->respond('GET', '/addActor', function () {
    require 'src/views/viewAddActeur.php';
});

//--------------------------------------------------------------------------------

$klein->respond('POST', '/addActeur', function ($request) use ($backController) {
    $backController->addActor($request->paramsPost());
});

$klein->dispatch();
