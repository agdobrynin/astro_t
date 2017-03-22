<?php
namespace Core;

class Model extends Db{
    protected $id;

    public function __construct( int $id = null )
    {
        $this->id = $id;
    }
}
