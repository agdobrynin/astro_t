<?php
namespace Controllers;

use \Core\Controller as Controller;
use \Core\Db as Db;

class ControllerList extends Controller{

    public function index()
    {
        $sql = 'select * from Calcs';
        if ( $result = @Db::query($sql) ){
            while( $row = $result->fetchArray() ){
                $calculates[$row["id"]]=$row["name"];
            }
        }else{
            $errors[]="Ошибка обращения к базе данных";
            $errors[]=Db::getError();
        }

        $title = "Список расчетов в базе";
        return self::View('list.php', compact(["calculates", "title", "errors"]));
    }

    public function search()
    {
      $title = "Поиск расчетов в базе";
      return self::View('list.php', compact(["calculates", "title", "errors"]));
    }

}
