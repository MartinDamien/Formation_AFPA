<?php
require 'Logger.php';
require 'Application.php';

$logger = new Logger();
$app = new Application();
$app->run($logger);
