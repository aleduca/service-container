<?php

namespace core;

class Application
{
  private static Container $container;

  public static function resolve(Container $container)
  {
    self::$container = $container;
  }

  public static function make(string $key)
  {
    return self::$container->get($key);
  }
}
