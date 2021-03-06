<?php
// route и действие
return [

    //Главная страница
    '/' => 'ControllerMain@index',

    //форма добавить новый расчет
    '/secret/add' => 'ControllerCalculates@index',

    //Обработать форму нового расчета и выдать результат
    '/secret/create' => 'ControllerCalculates@create',

    //Список расчетов
    '/list' => 'ControllerList@index',

    //Поиск расчета по критериям
    '/list/search' => 'ControllerList@search',

    //Информация о расчете в Json формате
    '/calcshow' => 'ControllerCalculates@showJson',
];
