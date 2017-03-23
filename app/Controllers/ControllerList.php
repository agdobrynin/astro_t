<?php
namespace Controllers;

use \Core\Controller as Controller;
use \Core\Db as Db;
use \Models\CalculateList;

class ControllerList extends Controller{

    public function index()
    {
        try {
            $List = new CalculateList();
            $calculates = $List->GetList();
        } catch (\Exception $e) {
            $errors = $e->getMessage();
        }

        $title = "Список расчетов в базе";
        return self::View('list.php', compact(["calculates", "title", "errors"]));
    }

    public function search()
    {
        $title = "Поиск расчетов в базе";
        try {
            // $min =
            // $max =
            $List = new CalculateList();
            $calculates = $List->GetList();
        } catch (\Exception $e) {
            $errors = $e->getMessage();
        }
        return self::View('list.php', compact(["calculates", "title", "errors"]));
    }

}
