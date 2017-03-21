<?php
namespace Core;

class App{
  protected $view;

  protected $request;

  public function __construct( array $request )
  {
    $this->request = $request;
  }

  public function Run()
  {

  }
}
