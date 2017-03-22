<?php
//зашрузка настроек
$conf = require_once '../conf/index.php';
require_once '../app/autoload.php';
//Загрузка проутов и действий
$routes = require_once '../conf/routes.php';
//Экземпляр приложения
$app = new \Core\App( $conf );
//Роуты из конфигурации
$app->RoutesArray( $routes );
//Запуск приложения и вывод результатов
$app->Run();
