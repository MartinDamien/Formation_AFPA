<?php
require('vendor/autoload.php');

$base  = dirname($_SERVER['PHP_SELF']);
if (ltrim($base, '/')) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}
echo($base);

$klein = new \Klein\Klein();

use Twig\Environment;

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/src/views');
$twig = new Environment($loader, ['cache' => false, 'debug' => true]);
$twig->addExtension(new \Twig\Extension\DebugExtension());



use alloCine\controllers\controller;

$controller = new controller($twig);

$klein->respond('GET', '/', function () use ($controller) {
    $controller->index();
});

$klein->respond('GET', '/hello', function () {
    return 'Hello World!';
});


$klein->dispatch();