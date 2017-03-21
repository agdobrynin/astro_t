<?php

$conf = require_once '../app/conf.php';
require_once '../classes/autoload.php';

//$App = new App( $conf );


$View = new Core\View( $conf["views_path"] );

$uri = urldecode( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) );

//Маршрутизация
switch ($uri) {
  //Форма Добавления нового расчета
  case '/add':
    $title = "Добавить новый расчет";
    $calc = new Calculates();
    print $View->Render("new.php", compact(["title"]));
    break;
  //Сохранение нового расчета и его разбор
  case '/add/store':

    break;
  //Список расчетов
  case '/list':

    break;
  //Список расчетов
  case '/list':

    break;
  case '/search':

    break;
  default:
    print $View->Render("master.php", compact("uri"));
    break;
}
