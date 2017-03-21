<?php
//Создадим пустую базу
$conf = require_once __DIR__.'/app/conf.php';
print "\n Create database in ".$conf["db"]."\n-----------\n";
$db = new SQLite3( $conf["db"] );

$db->exec('
CREATE TABLE `Calcs` (
	`id`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`title`	TEXT UNIQUE,
	`body`	TEXT
);
');

$db->exec('
CREATE TABLE `Calc_results` (
	`calc_id`	INTEGER NOT NULL,
	`secret_code`	NUMERIC
);
');
