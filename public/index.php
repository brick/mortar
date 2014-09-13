<?php

use Brick\Application\Application;
use Brick\Application\Plugin\RequestParamPlugin;
use Brick\Application\Route\StandardRoute;
use Brick\Di\Container;
use Brick\Di\InjectionPolicy\AnnotationPolicy;
use Doctrine\Common\Annotations\AnnotationReader;

require __DIR__ . '/../vendor/autoload.php';

// Create an annotation reader, and an injection policy based on annotations.
$annotationReader = new AnnotationReader();
$injectionPolicy = new AnnotationPolicy($annotationReader);

// Create and configure the dependency injection container.
$container = new Container($injectionPolicy);

// Create the application.
$application = Application::createWithContainer($container);

// Add a route that directly maps a path to a controller class and method.
$application->addRoute(new StandardRoute('Mortar\Controller'));

/*
 * Plug in the @QueryParam and @PostParam functionality.
 *
 * If you use a Doctrine EntityManager, you can have your entities
 * autoinstantiated in your controllers by passing a second parameter:
 *
 * use Brick\Controller\ParameterConverter\DoctrineConverter;
 * new RequestParamListener($annotationReader, new DoctrineConverter($entityManager))
 */
$application->addPlugin(new RequestParamPlugin($annotationReader));

/*
 * Run the application.
 */
$application->run();
