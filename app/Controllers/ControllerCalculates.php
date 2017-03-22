<?php
namespace Controllers;

use \Core\Controller as Controller;
use \Models\Calculate;

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
            $errors[]="Все поля в форме обязательные";
            $name = str_replace("\"", "&quot;", $name);
            $prev=compact('body','name');
            return self::View('new.php', compact(['errors', 'title', 'prev']) );
        }

        $codes = \Calculates::Render($body);
        try {
            $Calculate = new Calculate();
            $Calculate->save( $name, $body );
            $Calculate->saveCodes( $codes );
            $message = "Данные расчета &laquo;$name&raquo; сохранены в базе. Найдено ".count($codes)." секретных кодов";
        } catch (\Exception $e) {
            $name = str_replace("\"", "&quot;", $name);
            $prev=compact('body','name');
            $errors[]=$e->getMessage();
        }
        return self::View('new.php', compact(['message',  'errors', 'title', 'prev', 'codes']) );
    }
}
