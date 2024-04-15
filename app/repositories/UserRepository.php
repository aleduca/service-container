<?php

namespace app\repositories;

use app\interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
  public function find($id)
  {
    return 'Find user with id ' . $id;
  }
}
