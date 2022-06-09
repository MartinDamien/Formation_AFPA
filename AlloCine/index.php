<?php
require('vendor/autoload.php');

$base  = dirname($_SERVER['PHP_SELF']);
if (ltrim($base, '/')) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}
echo($base.'<br>');
define('_ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
echo(_ROOT);

$routeur = new \Klein\Klein();

use Twig\Environment;

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/src/views');
$twig = new Environment($loader, ['cache' => false, 'debug' => true]);
$twig->addExtension(new \Twig\Extension\DebugExtension());


use alloCine\controllers\controller;
use alloCine\controllers\acteur;
use alloCine\controllers\film;
use alloCine\controllers\realisateur;
use alloCine\controllers\genre;

$controller = new controller($twig);
$film = new film($twig);
$acteur = new acteur($twig);
$realisateur = new realisateur($twig);
$genre = new genre($twig);


$routeur->respond('GET', '/', function () use ($controller) {
    $controller->index();
});

/////////////////////////////////////////////////////////////////////////
//////////////////////////////////Film///////////////////////////////////
/////////////////////////////////////////////////////////////////////////

$routeur->respond('GET', '/Film', function () use ($film) {
    $film->getAllFilm();
});

$routeur->respond('GET', '/Film/nouveau', function () use ($film) {
    $film->createFilm();
});

$routeur->respond('GET', '/Film/modif', function () use ($film) {
    $film->modifFilm();
});

/////////////////////////////////////////////////////////////////////////
///////////////////////////////Realisateur///////////////////////////////
/////////////////////////////////////////////////////////////////////////

$routeur->respond('GET', '/Realisateur', function () use ($realisateur) {
    $realisateur->getAllRealisateur();
});

$routeur->respond('GET', '/Realisateur/nouveau', function () use ($realisateur) {
    $realisateur->createRealisateur();
});

$routeur->respond('GET', '/Realisateur/modif', function () use ($realisateur) {
    $realisateur->modifRealisateur();
});

/////////////////////////////////////////////////////////////////////////
//////////////////////////////////Acteur/////////////////////////////////
/////////////////////////////////////////////////////////////////////////
$routeur->respond('GET', '/Acteur', function () use ($acteur) {
    $acteur->getAllActeur();
});

$routeur->respond('GET', '/Acteur/nouveau', function () use ($acteur) {
    $acteur->createActeur();
});

$routeur->respond('GET', '/Acteur/addActeur', function () use ($acteur) {
    $acteur->addActeur();
});

$routeur->respond('GET', '/Acteur/modif', function () use ($acteur) {
    $acteur->modifActeur();
});

/////////////////////////////////////////////////////////////////////////
//////////////////////////////////Genre//////////////////////////////////
/////////////////////////////////////////////////////////////////////////

$routeur->respond('GET', '/Genre', function () use ($genre) {
    $genre->getAllGenre();
});

$routeur->respond('GET', '/Genre/nouveau', function () use ($genre) {
    $genre->createGenre();
});

$routeur->respond('GET', '/Genre/modif', function () use ($genre) {
    $genre->modifGenre();
});

$routeur->dispatch();
