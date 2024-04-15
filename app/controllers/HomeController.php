<?php

namespace app\controllers;

use app\interfaces\UserRepositoryInterface;
use app\library\Auth;
use app\library\NewsLetter;
use core\Application;

class HomeController
{
  public function __construct(
    private Auth $auth
  ) {
  }

  public function index(
    UserRepositoryInterface $userRepository,
    NewsLetter $newsLetter
  ) {
    dd(
      $userRepository->find(123),
      $this->auth->auth(),
      $newsLetter->send()
    );
  }
}
