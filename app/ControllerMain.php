<?php

class ControllerMain extends Core\Controller{


    public function index()
    {
        return self::View('master.php');
    }
}
