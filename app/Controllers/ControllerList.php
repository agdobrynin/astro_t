<?php
namespace Controllers;

use \Core\Controller as Controller;

class ControllerList extends Controller{

    public function index()
    {
        $calculates=[

        ];
        $title = "Список расчетов в базе";
        return self::View('list.php', compact(["calculates", "title"]));
    }

    public function search()
    {
      $title = "Поиск расчетов в базе";
      return self::View('list.php', compact(["calculates", "title"]));
    }

}
