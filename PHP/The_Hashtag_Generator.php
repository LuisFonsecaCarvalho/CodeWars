<?php

/* The marketing team is spending way too much time typing in hashtags.
Let's help them with our own Hashtag Generator!

Here's the deal:

    It must start with a hashtag (#).
    All words must have their first letter capitalized.
    If the final result is longer than 140 chars it must return false.
    If the input or the result is an empty string it must return false.

Examples

" Hello there thanks for trying my Kata"  =>  "#HelloThereThanksForTryingMyKata"
"    Hello     World   "                  =>  "#HelloWorld"
""                                        =>  false
 */


    function generateHashtag($str) {
        $sentence="#";
        $words=explode(" ", $str);
        if(empty(str_replace(' ', '', $str)) || strlen(str_replace(' ', '', $str))>=140){
        return false;
        }
    
        foreach ($words as $key => $value){
        $sentence=$sentence.ucfirst($value);
        }
    
        return $sentence;
    }

/* Best Solution */
/* function generateHashtag($str) {
  
    $str = '#' . str_replace(' ', '', ucwords($str));
    
    return (strlen($str) > 140 || strlen($str) == 1) ? false : $str;
 }
 */


?>