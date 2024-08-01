<?php
//My Soluction
function solution($number){
  $c=array();
  $t=array();
  $ct=array();
  for($i=0; $i*3<$number; $i++){
    $t[]=3*$i;
    $c[]=5*$i;
    array_push($ct, 3*$i, 5*$i);
  }
  //creates an array with the repeated values of $c & $t
  //this prevents the repeated numbers of being counted twice
  $inter=array_intersect($c, $t);
  //remove from $ct the values in $inter
  $arr1=array_diff($ct, $inter);
  //order the array in ascending order
  asort($arr1);
  //filter from $arr1 all values bigger than $number
  $arr1=array_filter(
  $arr1,
    function ($value) use($number){
      return ($value < $number);
    }
  );
  //sum the element of $arr1 which contains the unique multiples 
  //and $inter which contains the multiple of both 3 & 5
  return array_sum($arr1)+array_sum($inter);
}
// Best Soluction
// function solution($number) {
//   $sum = 0;
//   for ($i = 3; $i < $number; $i++) {
//     if ($i % 3 === 0 || $i % 5 === 0) {
//       $sum += $i;
//     }
//   }
//   return $sum;
// }
?>