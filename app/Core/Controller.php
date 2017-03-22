<?php
/**
 * Базовый класс контролеров
 */
namespace Core;

class Controller{

    protected static $app;

    public function __construct($app)
    {
        self::$app = $app;
    }

    public static function View($view, $data=null)
    {
        
        return self::$app->GetView()->Render($view, $data);
    }

    public static function Request()
    {
        return self::$app->Request();
    }
}
