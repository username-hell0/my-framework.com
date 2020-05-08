<?php

declare(strict_types=1);

use Core\Application\Application;
use Core\Router\Router;

include_once '../vendor/autoload.php';

$routes = require_once '../app/Config/routes.php';

$router = new Router($routes);

$app = new Application($router);
$app->start();
