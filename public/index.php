<?php

$conf = require_once '../conf/index.php';
require_once '../app/autoload.php';

$app = new \Core\App( $conf );

$app->RouteAdd('/', 'ControllerMain@index');
$app->RouteAdd('/secret/add', 'ControllerCalculates@index');
$app->RouteAdd('/secret/create', 'ControllerCalculates@create');
$app->RouteAdd('/list', 'ControllerList@index');
$app->RouteAdd('/list/search', 'ControllerList@search');

$app->Run();
