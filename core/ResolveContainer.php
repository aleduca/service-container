<?php

namespace core;

use ReflectionClass;

class ResolveContainer
{
  public function parameters($method, Container $container)
  {
    return array_map(function ($param) use ($container) {
      return $container->get($param->getType()->getName());
    }, $method->getParameters());
  }

  public function instance(string $key, Container $container)
  {
    $reflection = new ReflectionClass($key);
    $construct = $reflection->getConstructor();

    if (!$construct) {
      return new $key;
    }

    return $reflection->newInstanceArgs(
      $this->parameters($construct, $container)
    );
  }
}
