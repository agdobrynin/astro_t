<?php

namespace Core;

class Route{

  public function Add(string $route, callable $calabel)
  {
    $this->routes[$route]= $calabel;
  }

  public function Exec()
  {
    $p=isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:'/';
    foreach ($this->routes as $route => $action) {
        if (preg_match($route, $p, $params)) {
            array_shift($params);
            return call_user_func_array( $action , array_values($params));
		    }
    }
    return false;
  }

}
