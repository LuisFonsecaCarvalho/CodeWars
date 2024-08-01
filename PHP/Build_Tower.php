<!-- Build Tower

Build Tower by the following given argument:
number of floors (integer and always greater than 0).

Tower block is represented as *

    Python: return a list;
    JavaScript: returns an Array;
    C#: returns a string[];
    PHP: returns an array;
    C++: returns a vector<string>;
    Haskell: returns a [String];
    Ruby: returns an Array;
    Lua: returns a Table;

Have fun! -->
<?php
function tower_builder(int $n): array {
    // Build your tower here
    $s='';
    $arr=[];
    $t='*';  
    for($i=0; $i<$n; $i++){
      $s=$s.'  ';
    }
    $s=substr($s, 0, -1);
    for($i=0; $i<$n; $i++){
        $l=substr_replace($s, $t, (($n)-strlen($t)/2), strlen($t));
        array_push($arr, $l);
        $t=$t.'**';
    }
    return($arr);
  }
// //   "Best Solution"
//   function tower_builder(int $n): array {
//     $pad = $n * 2 - 1;
//     $x = 1;
    
//     $arr = [];
//     while ($n --> 0) {
//         $arr[] = str_pad(str_repeat('*', $x), $pad, ' ', STR_PAD_BOTH);
//         $x += 2;
//     }
   
//     return $arr;
// }

?>