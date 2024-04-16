<?php

namespace app\controllers;

use app\interfaces\UserRepositoryInterface;
use app\library\Auth;
use app\library\NewsLetter;
use core\Application;
use DI\Attribute\Inject;

class HomeController
{
  public function __construct(
    private UserRepositoryInterface $userRepository,
  ) {
  }

  #[Inject(['teste' => 'key'])]
  public function index(
    NewsLetter $newsLetter,
    $teste
  ) {
    dd(
      $this->userRepository->find(123),
      $newsLetter->send(),
      $teste
    );
  }
}
