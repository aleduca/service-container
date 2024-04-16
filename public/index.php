<?php

use core\Router;
use DI\Container;

require './bootstrap.php';

/** @var Container $container */
$router = new Router($container);
$router->create(require '../routes/web.php');
