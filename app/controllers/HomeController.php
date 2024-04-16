<?php

namespace app\controllers;

use app\interfaces\UserRepositoryInterface;
use app\library\Auth;
use app\library\NewsLetter;
use core\Application;

class HomeController
{
  public function __construct(
    private UserRepositoryInterface $userRepository,
    private Auth $auth
  ) {
  }

  public function index(
    NewsLetter $newsLetter
  ) {
    dd(
      $this->userRepository->find(123),
      $this->auth->auth(),
      $newsLetter->send()
    );
  }
}
