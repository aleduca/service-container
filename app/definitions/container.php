<?php

use app\interfaces\UserRepositoryInterface;
use app\repositories\UserRepository;

return [
  UserRepositoryInterface::class => function () {
    return new UserRepository;
  },
  'key' => 'value'
];
