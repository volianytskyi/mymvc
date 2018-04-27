<?php

class Route
{
  private $routes;

  public function __construct()
  {
    $routes = __DIR__ . '/../config/routes.php';
    if(file_exists($routes))
    {
      $this->routes = require_once $routes;
    }
    else
    {
      throw new Exception("Can't build Route object", 1);
    }
  }

  private function getRequestUri()
  {
    if(!empty($_SERVER['REQUEST_URI']))
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
    return null;
  }

  public function run()
  {

    $uri = $this->getRequestUri();
    $segments = explode('/', $uri);
    $controllerName = array_shift($segments);
    if(!isset($this->routes[$controllerName]))
    {
      echo '404';
    }
    $controller = new ucfirst($controllerName) . 'Controller'();


  }
}

 ?>
