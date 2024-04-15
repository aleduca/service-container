<?php

namespace core;

use ReflectionClass;

class Container
{
  private array $bindings = [];
  public function bind(
    string $key,
    mixed $value
  ) {
    $this->bindings[$key] = $value;
  }

  public function resolveParameters($method)
  {
    return array_map(function ($param) {
      return $this->get($param->getType()->getName());
    }, $method->getParameters());
  }

  private function getInstance(string $key)
  {
    $reflection = new ReflectionClass($key);
    $construct = $reflection->getConstructor();

    if (!$construct) {
      return new $key;
    }

    return $reflection->newInstanceArgs(
      $this->resolveParameters($construct)
    );
  }

  public function get(string $key)
  {
    if (isset($this->bindings[$key])) {
      $bind = $this->bindings[$key];
      if ($bind instanceof \Closure) {
        return $bind();
      }
      return $bind;
    }

    if (class_exists($key)) {
      return $this->getInstance($key);
    }
  }
}
