<?php

namespace app\controllers;

use core\Application;

class UserController
{
  public function index()
  {
    Application::make('UserRepository')->find(1);
  }
}
