<?php
// In this kata you have to create all permutations of an input string and remove duplicates, if present. This means, you have to shuffle all letters from the input in all possible orders.

// Examples:

// permutations('a'); // => ['a']
// permutations('ab'); // => ['ab', 'ba']
// permutations('aabb'); // => ['aabb', 'abab', 'abba', 'baab', 'baba', 'bbaa']

// The order of the permutations doesn't matter.
$s='zusrndd';
$t=str_split($s);
$l=0;
$final= [];
for($i=0; $i<=pow(2, strlen($s)); $i++){
    if($l<strlen($s)-1){
        $out = array_splice($t, $l, 1);
        array_splice($t, $l+1, 0, $out);
        $l++;
        array_push($final, implode($t));
    }
    else{
        $l=0;
    }
}
$p=array_values(array_unique($final));
print_r($final)
?>
