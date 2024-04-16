<?php

declare(strict_types=1);

use app\interfaces\UserRepositoryInterface;
use app\repositories\UserRepository;
use core\Application;
use core\Container;
use core\ResolveContainer;

require '../vendor/autoload.php';
require '../app/definitions/constants.php';

$container = new Container(
  new ResolveContainer
);

$container->addDefinitions('../app/definitions/container.php');


Application::resolve($container);
