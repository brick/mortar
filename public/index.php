<?php

use Brick\Http\Request;
use Brick\Application\Application;
use Brick\Routing\Route\StandardRoute;

require __DIR__ . '/../vendor/autoload.php';

$application = Application::create();
$application->addRoute(new StandardRoute('Project\Controller'));

$request = Request::getCurrent();
$response = $application->handle($request);
$response->send();
