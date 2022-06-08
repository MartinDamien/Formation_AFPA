<?php
require('vendor/autoload.php');

$base  = dirname($_SERVER['PHP_SELF']);
if (ltrim($base, '/')) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

$routeur = new \Klein\Klein();

use Twig\Environment;

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/src/views');
$twig = new Environment($loader, ['cache' => false, 'debug' => true]);
$twig->addExtension(new \Twig\Extension\DebugExtension());



use alloCine\controllers\controller;

$controller = new controller($twig);

$routeur->respond('GET', '/', function () use ($controller) {
    $controller->index();
});

////////////////////////////Film////////////////////////////

$routeur->respond('GET','/Film', function () use ($controller) {
    $controller->getAllFilm();
});

$routeur->respond('GET','/Film/new', function () use ($controller) {
    $controller->getAllFilm();
});

////////////////////////////Realisateur////////////////////////////

$routeur->respond('GET','/Realisateur', function () use ($controller) {
    $controller->getAllRealisateur();
});

$routeur->respond('GET','/Realisateur/new', function () use ($controller) {
    $controller->getAllRealisateur();
});

////////////////////////////Acteur////////////////////////////

$routeur->respond('GET', '/Acteur', function () use ($controller) {
    $controller->getAllActeur();
});

$routeur->respond('GET', '/Acteur/new', function () use ($controller) {
    $controller->createActeur();
});

////////////////////////////Genre////////////////////////////

$routeur->respond('GET','/Genre', function () use ($controller) {
    $controller->getAllGenre();
});

$routeur->respond('GET','/Genre/new', function () use ($controller) {
    $controller->getAllGenre();
});



$routeur->dispatch();