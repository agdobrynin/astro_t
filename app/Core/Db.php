<?php
namespace Core;

class Db {

    private static $instance = NULL;

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public static function Init( $path )
    {
      if (!isset(self::$instance)) {
        self::$instance = new \SQLite3($path);
      }
      return self::$instance;
    }

    public static function getInstance()
    {
      return self::$instance;
    }

    public static function getError()
    {
      return self::$instance->lastErrorMsg();
    }

    public static function getLastId()
    {
      return self::$instance->lastInsertRowid();
    }

    public static function escape( $value ){
        return \SQLite3::escapeString( $value );
    }
    public static function getFields( $table )
    {
        $r = [];
        $results = self::$instance->query("PRAGMA table_info( $table )");
        while ($row = $results->fetchArray()) {
            $r[]=$row['name'];
        }
        return $r;
    }

    public static function query( $sql )
    {
        return self::$instance->query( $sql );
    }
}
