<?php

namespace app\repositories;

use app\interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
  public function find($id)
  {
    dd('Find user with id ' . $id);
  }
}
