<?php

use app\controllers\HomeController;
use app\controllers\UserController;

return [
  '/' => [HomeController::class, 'index'],
  '/user' => [UserController::class, 'index'],
];
