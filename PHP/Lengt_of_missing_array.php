<?php
function getLengthOfMissingArray($arrayOfArrays)
{
    if ($arrayOfArrays == null) {
        return 0;
    }
    foreach ($arrayOfArrays as $key => $value) {

        $a[] = count($value);
    }
    sort($a);
    if (count($arrayOfArrays) == 0 ||  $a[0] == 0) {
        return 0;
    }
    for ($i = min($a); $i <= max($a); $i++) {
        $n[$i] = $i;
    }
    $n = array_diff($n, $a);
    return end($n);
}
        //best solution
    //   function getLengthOfMissingArray($arrayOfArrays) {
    //     if(!$arrayOfArrays || in_array(0, $length_array = array_map('count', $arrayOfArrays))) return 0;
    //     $compare_array = range(min($length_array),max($length_array));
    //     return array_values(array_diff($compare_array, $length_array))[0];
    //   }
?>