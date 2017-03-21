<?php

namespace Core;

class App{

  protected $request;

  protected $conf;

  protected $routes=[];

  protected $uri;

  protected $view;

  public function __construct( array $conf )
  {
    $this->conf = $conf;
    $this->view = new View( $conf["views_path"] );
    $this->request = array_merge($_POST, $_GET);
  }

  public function RouteAdd(string $route, $calabel)
  {
      if ( is_string( $calabel ) && strpos( $calabel, '@') ) {
          $controller = strstr($calabel, '@', true);
          $method = substr(strrchr($calabel, "@"), 1);
          $calabel = array( new $controller($this), $method );
      }
      $this->routes[$route]= $calabel;
  }

  public function GetView()
  {
      return $this->view;
  }

  public function Request()
  {
      return $this->request;
  }

  public function Run()
  {
      $this->uri = urldecode( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) );
      foreach ($this->routes as $route => $action) {
          if ( $route == $this->uri ){
              print call_user_func_array( $action, [] );
              return;
          }
      }
      header("HTTP/1.0 404 Not Found");
      
      try {
          $uri = $this->uri;
          print $this->view->Render('404.php', compact(["uri"]));
      } catch (\Exception $e) {
          print "<h1>Page not found!</h1><p>
          uri: <strong>$this->uri</strong>
          </p>";
      }
      return;
  }
}
