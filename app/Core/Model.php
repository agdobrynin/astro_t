<?php
namespace Core;

class Model extends Db{
    protected $id;

    public function __construct( $id = null )
    {
        $this->id = $id;
    }
}
