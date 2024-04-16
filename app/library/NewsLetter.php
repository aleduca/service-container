<?php

namespace app\library;

class NewsLetter
{

  public function __construct(
    private Address $address
  ) {
  }

  public function send()
  {
    return $this->address;
  }
}
