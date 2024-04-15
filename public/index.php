<?php

use app\interfaces\UserRepositoryInterface;
use app\repositories\UserRepository;
use core\Application;
use core\Container;
use core\Router;

require '../vendor/autoload.php';

$routes = require '../routes/web.php';

$container = new Container;
$container->bind(UserRepositoryInterface::class, function () {
  return new UserRepository;
});

$container->bind('key', 'value');


Application::resolve($container);

$router = new Router($container);
$router->create($routes);
