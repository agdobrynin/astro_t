<?php
namespace Controllers;

use \Core\Controller as Controller;
use \Core\Db as Db;
class ControllerCalculates extends Controller{

    public function index()
    {
        $title = "Добавить новый расчет";
        return self::View('new.php', compact('title'));
    }

    public function create()
    {
        $name = str_replace('"','&quot;', self::Request('name'));
        $body = self::Request('body');
        $title = "Добавить новый рачет";
        $prev = compact('name','body');
        if( empty( $name ) ||  empty( $body ) )
        {
            $errors[]="Все поля в форме обязательные";
        }else{
            $sql = 'Insert into Calcs (name, body) values ("'.$name.'", "'.$body.'")';
            if ( @Db::query($sql) ){
                $last_id = @Db::getLastId();
                $codes = \Calculates::Render($body);
                if( count($codes) ){
                    $values = [];
                    foreach( $codes as $code){
                        $values[] = "(".$last_id." , ".$code.")";
                    }
                $sql = 'Insert into CalcResults values '.join(',', $values);
                if( @Db::query($sql) == false ){
                    $errors[]="Ошибка сохранения секретных кодов в базе данных";
                    $errors[]=Db::getError();
                    @Db::query("delete from Calcs where id=".$last_id);
                }
            }
            $message = "Данные расчета &laquo;$name&raquo; сохранены в базе. Найдено ".count($codes)." секретных кодов";

          }else{
            $errors[]="Ошибка сохранения в базе данных";
            $errors[]=Db::getError();
          }
        }
        return self::View('new.php', compact(['message',  'errors', 'title', 'prev', 'codes']) );
    }
}
