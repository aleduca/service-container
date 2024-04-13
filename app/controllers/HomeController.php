<?php

namespace app\controllers;

use app\interfaces\UserRepositoryInterface;
use core\Application;

class HomeController
{
  public function index()
  {
    dd(Application::make('key'));
  }
}
