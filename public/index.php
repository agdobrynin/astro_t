<?php
$conf = require_once '../app/conf.php';
require_once '../classes/autoload.php';

$View = new Core\View( $conf["views_path"] );

$uri = urldecode( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) );

print $View->Render("master.php", compact("uri"));
