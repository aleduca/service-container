<?php

namespace core;

interface ContainerInterface
{
  public function bind(
    string $key,
    mixed $value
  );
  public function addDefinitions(
    array|string $definitions
  );
  public function get(string $key);
}
