<?php
namespace Controllers;

use \Core\Controller as Controller;

class ControllerCalculates extends Controller{

    public function index()
    {
        return self::View('new.php');
    }

    public function create()
    {
        $title = self::Request('title');
        $body = self::Request('body');

        if( empty( $title ) ||  empty( $body ) )
        {
          $title = str_replace('"','&quot;', $title);
          $errors[]="Все поля в форме обязательные";
        }else{

          $message = "Данные расчета &laquo;$title&raquo; сохранены в базе";
          $title = '';
          $body = '';
        }
        return self::View('new.php', compact('message',  'errors', 'title', 'body') );
    }
}
