<?php
namespace Core;

class Db {

    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance( string $path ) {
      if (!isset(self::$instance)) {
        self::$instance = new \SQLite3($path);
      }
      return self::$instance;
    }
}
