<?php


class Route
{
  public static $routes = [];

  public static function set($route, $function)
  {
    self::$routes[] = $route;

    if ($_GET['url'] == $route) {
      $function->__invoke();
    }

    //var_dump(self::$routes);
  }
}