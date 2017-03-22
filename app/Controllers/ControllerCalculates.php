<?php
namespace Controllers;

use \Core\Controller as Controller;

class ControllerCalculates extends Controller{

    public function index()
    {
        $title = "Добавить новый расчет";
        return self::View('new.php', compact('title'));
    }

    public function create()
    {
        $name = self::Request('name');
        $body = self::Request('body');
        $title = "Добавить новый рачет";

        if( empty( $name ) ||  empty( $body ) )
        {
          $name = str_replace('"','&quot;', $name);
          $errors[]="Все поля в форме обязательные";
        }else{

          $message = "Данные расчета &laquo;$name&raquo; сохранены в базе";
          $name = '';
          $body = '';
        }
        return self::View('new.php', compact(['message',  'errors', 'title', 'body', 'name']) );
    }
}
