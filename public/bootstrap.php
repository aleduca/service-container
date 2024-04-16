<?php

declare(strict_types=1);

use core\Application;
use DI\ContainerBuilder;

use function DI\create;

require '../vendor/autoload.php';
require '../app/definitions/constants.php';

$container = new ContainerBuilder();
$container->useAttributes(true);
$container->addDefinitions(APP_PATH . '/definitions/container.php');
// $container->addDefinitions([
//   UserRepositoryInterface::class => create(UserRepository::class),
//   'key' => 'value'
// ]);

$container = $container->build();

Application::resolve($container);
