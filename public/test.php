<?php
$calc_sicret = "
demis

4

lala-}blab{la ! =))

:(

{457}7775 {-1.000001 }

32

{+98}

{2} {+3.14} {12637} 9812 {89123789}

1

O O1 01

1O

1}OO

{zer}o!

{df1000 ggg...

{5-}

105}

{-2010}

wass{auupp!!

";

print "<pre>".$calc_sicret."<hr>";

function Parser($str){
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

print_r ( Parser($calc_sicret) );
