<?php
function toWeirdCase($string)
{
    //Separate the sentense in diferentes words
    $string = explode(" ", $string);
    //cycle all the words in a for loop 
    for ($t = 0; $t < count($string); $t++) {
        //cycle all the characters in a for loop
        for ($i = 0; $i < strlen($string[$t]); $i++) {
            //check if the possition of the character in the sentence is even or odd
            //and change the character to upper or lower case accordingly
            if ($i % 2 == 0) {
                $string[$t][$i] = strtoupper($string[$t][$i]);
            } else {
                $string[$t][$i] = strtolower($string[$t][$i]);
            }
        }
    }
    return implode(" ", $string);
}

//My Other Solution
// function toWeirdCase($string){
//     //Convert al character to lower case
//     $string=strtolower($string);
//     //Separate the sentense in diferentes words
//     $string = explode(" ", $string);
//     //cycle all the words in a for loop 
//     for ($t = 0; $t < count($string); $t++) {
//         //cycle all the characters in a for loop
//         for ($i = 0; $i < strlen($string[$t]); $i++) {
//             //check if the possition of the character in the sentence is even or odd
//             //and change the character to upper or lower case accordingly
//             if ($i % 2 == 0) {
//                 $string[$t][$i] = strtoupper($string[$t][$i]);
//             } 
//         }
//     }
//     return implode(" ", $string);
// }

//Best Soluction
//The strtr If given three arguments, this function returns a copy of string where all occurrences of each (single-byte) character in from have been translated to the corresponding character in to
// function toWeirdCase($string) {
//     // TODO
//     $str = str_split(strtolower($string));
//     for ($n=0; $n<=count($str); $n++) {
//       if ($str[$n]!=" ") {
//         $str[$n] = strtoupper($str[$n]);
//         $n = $n + 1; 
//       }
//     }
//     return implode("", $str);
//   }
?>