<?php

namespace core;

use app\library\Auth;
use app\repositories\UserRepository;
use ReflectionMethod;

class Router
{
  private string $controller;
  private string $method;

  public function __construct(
    private Container $container
  ) {
  }

  public function create(array $routes)
  {
    foreach ($routes as $uri => $route) {
      if ($uri === $_SERVER['REQUEST_URI']) {
        $this->controller = $route[0];
        $this->method = $route[1];
      }
    }
    $this->makeInstance();
  }

  private function makeInstance()
  {
    if (class_exists($this->controller)) {
      $controller = $this->container->get($this->controller);
      $method = new ReflectionMethod($controller, $this->method);
      if (method_exists($controller, $this->method)) {
        return $controller->{$this->method}(
          ...$this->container->resolveParameters($method),
        );
      }
    }
  }
}
