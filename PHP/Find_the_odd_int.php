<?php
// Given an array of integers, find the one that appears an odd number of times.
// There will always be only one integer that appears an odd number of times.
function findIt(array $seq): int
{
    //returns an array using the values of array as keys and their frequency in array as values
    $pikachu = array_count_values($seq);
    //runs through the array to find the odd number
    foreach ($pikachu as $key => $value) {
        if ($value % 2 != 0) { //Can change to if($value%2) becouse this wil return 1 wich is false
            return $key;
        }
    }
}
//Best practice
// function findIt(array $seq) : int
// {
//     return array_reduce($seq, function($carry, $value) {
//           return $carry ^ $value;
//     });
// }
//Explanation:
// This solution uses the Bitwise Exclusive OR (XOR) operator. The XOR operator will compare the values and only keep bits that are set (1) in $carry or $value but not when both are set.

// For example:
// ( 1 = 0001) ^ ( 5 = 0101) = ( 4 = 0100 )
// ( 5 = 0101) ^ ( 5 = 0101) = ( 0 = 0000 )

// Notice that 5 ^ 5 results in all bits set to 0. Since this is the exclusive OR, any bit set an even number of times will be "erased" from the final result.
// ( 5 = 0101) ^ ( 5 = 0101) ^ ( 5 = 0101) ^ ( 5 = 0101) = ( 0 = 0000 )

// This means that if you have only one number appearing an odd number of times in a chain of XOR comparisons, the only bits that will remain set will be those associated with the number appearing the odd number of times:

// ( 5 = 0101) ^ ( 4 = 0100 ) ^ ( 5 = 0101) ^ ( 5 = 0101) ^ ( 5 = 0101) = ( 4 = 0100 )

// This can be seen stepping through how this function would evaluate [5, 4, 5, 5, 5]:
// ( null ) ^ ( 5 = 0101 ) = ( 5 = 0101 )
// ( 5 = 0101 ) ^ ( 4 = 0100 ) = ( 1 = 0001 )
// ( 1 = 0001 ) ^ ( 5 = 0101 ) = ( 4 = 0100 )
// ( 4 = 0100 ) ^ ( 5 = 0101 ) = ( 1 = 0001 )
// ( 1 = 0001 ) ^ ( 5 = 0101 ) = ( 4 = 0100 ) Final Result

?>