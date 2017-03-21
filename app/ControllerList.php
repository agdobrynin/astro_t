<?php

class ControllerList extends \Core\Controller{

    public function index()
    {
        $calculates=[

        ];
        $title = "Список расчетов в базе";
        return self::View('list.php', compact(["calculates", "title"]));
    }

    public function create()
    {
        var_dump( self::Request() );
    }

}
