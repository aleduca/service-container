<?php

use core\Router;

require './bootstrap.php';

$router = new Router($container);
$router->create(require '../routes/web.php');
