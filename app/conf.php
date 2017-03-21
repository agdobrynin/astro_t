<?php
return [
  //SQLite3 база
  "db" => __DIR__.'/../database/database.db',

  //Путь к шаблонам
  "views_path" => __DIR__."/../views",

  //Настройки парсера секретных кодов
  "parser" => [
    //Открывающий тэг для секретного кода
    "tag_open" => "{",
    //Закрывающий тэг для секретного кода
    "tag_close" => "}",
    //тип чисел integer | number
    "secret_type" => "integer"
  ],

];
