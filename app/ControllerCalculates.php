<?php

class ControllerCalculates extends \Core\Controller{

    public function index()
    {
        return self::View('new.php');
    }

    public function create()
    {
        var_dump( self::Request() );
    }
}
