<?php

use Brick\Application\Application;
use Brick\Routing\Route\StandardRoute;

require __DIR__ . '/../vendor/autoload.php';

$application = Application::create();
$application->addRoute(new StandardRoute('Mortar\Controller'));

$application->run();
