<?php

namespace Core;

class Database{

    private $connection = null;

    private $statement = null;

    private static $database = null;

    private function __construct() {
        if ($this->connection === null) {
            $this->connection = new new SQLite3('mysqlitedb.db');
        }
    }

    public static function openConnection(){
        if(self::$database === null){
            self::$database = new Database();
        }
        return self::$database;
    }

    public static function closeConnection() {
        if(isset(self::$database)) {
            self::$database->connection =  null;
            self::$database->statement = null;
            self::$database = null;
        }
    }

}
