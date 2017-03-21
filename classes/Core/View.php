<?php
namespace Core;

class View{
    private $ViewPath;

    public function __construct(string $path = null )
    {
      if( $path == null ){
        $this->ViewPath = realpath(__DIR__.'/../../views');
      }else{
        $this->ViewPath = realpath( $path );
      }
      $this->ViewPath .= "/";
    }

    public function setPath($viewPath)
    {
        $this->viewPath = realpath( $viewPath );
        if( $this->viewPath === false ){
                throw new Exception("Can't find Views path: $viewPath");
        }
        $this->viewPath.="/";
    }

    public function __get($prop)
    {
      return $this->$prop;
    }

    public function Render($Template, $data = null)
    {
        if( file_exists($this->ViewPath.$Template) ){
            extract($data, EXTR_OVERWRITE);
            ob_start();
            include $this->ViewPath.$Template;
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
        throw new \Exception("View does not exist: ".$this->ViewPath.$Template);
    }
}
