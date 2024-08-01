<!--Question   
There is an array with some numbers. All numbers are equal except for one. Try to find it!

findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55

It’s guaranteed that array contains at least 3 numbers.

The tests contain some very huge arrays, so think about performance.

This is the first kata in series:

    Find the unique number (this kata)
    Find the unique string
    Find The Unique

 -->

<?php
function find_uniq($a)
{
    // Do Magic :)
    //Order array and check if the first element is equal to 
    //the second, if True return the last element else return the first
    sort($a);
    if ($a[0] == $a[1]) {
        return end($a);
    } else {
        return $a[0];
    }
}
// function find_uniq($a) {
//     sort($a);
    //if($a[0] === $a[1]) is: True then return end($a), False then return current($a)
//     return ($a[0] === $a[1]) ? end($a) : current($a);
//   }
?>
