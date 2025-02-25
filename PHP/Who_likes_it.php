<!-- You probably know the "like" system from Facebook and other pages. People can "like" blog posts, pictures or other items. We want to create the text that should be displayed next to such an item.

Implement a function likes :: [String] -> String, which must take in input array, containing the names of people who like an item. It must return the display text as shown in the examples:

likes [] -- must be "no one likes this"
likes ["Peter"] -- must be "Peter likes this"
likes ["Jacob", "Alex"] -- must be "Jacob and Alex like this"
likes ["Max", "John", "Mark"] -- must be "Max, John and Mark like this"
likes ["Alex", "Jacob", "Mark", "Max"] -- must be "Alex, Jacob and 2 others like this"

For 4 or more names, the number in and 2 others simply increases. -->

<?php
function likes( $names ) {
    //Get the size of array
    $arraySize=count($names);
    switch ($arraySize) {
        case 0:
            return 'no one likes this';
        case 1:
            return $names[0].' likes this';  
        case 2:
            return $names[0].' and '.$names[1].' like this';
        case 3:
            return $names[0].', '.$names[1].' and '.$names[2].' like this';
        default:
            return $names[0].', '.$names[1].' and '.strval($arraySize-2).' others like this';
    }
  }


// Best Solution
// function likes($names): string {
//     return array(
//       '0' => "no one likes this",
//       '1' => "{$names[0]} likes this",
//       '2' => "{$names[0]} and {$names[1]} like this",
//       '3' => "{$names[0]}, {$names[1]} and {$names[2]} like this",
//       '4' => "{$names[0]}, {$names[1]} and ". (sizeof($names) - 2) ." others like this")[min(4, sizeof($names))];
//       //If the first and only parameter is an array, min() returns the lowest value in that array. 
//       //If at least two parameters are provided, min() returns the smallest of these values. 

//   }

?>