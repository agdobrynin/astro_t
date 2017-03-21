<?php
class Calculates{

    protected $id;

    protected $title;

    protected $body;


    public static function Render(string $str)
    {
        $res = [];
        $start = strpos($str, "{");
        while ($start !== false) {
            $end = strpos($str, "}" , $start);
            if($end == false){
                break;
            }
            $tag = substr ( $str , $start + 1 , $end - $start - 1  );
            if( is_numeric($tag) and strpos($tag, ".") === false){
              $res[]=$tag;
            }
            $start = strpos($str, "{" , $start +1 );
        }
        return $res;
    }

    public function Save(){

    }


}
