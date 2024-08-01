<?php
function solution ($roman) {
    $numb=0;
    $roman_array_values=[];
    $roman_array=str_split($roman);
    for($i=0; $i<=strlen($roman)-1; $i++){
      switch($roman_array[$i]){
          case 'I':
            $number=1;
            break;
          case 'V':
            $number=5;
            break;
          case 'X':
            $number=10;
            break;
          case 'L':
            $number=50;
            break;
          case 'C':
            $number=100;
            break;
          case 'D':
            $number=500;
            break;
          case 'M':
            $number=1000;
            break;
        default:
            $number=0;
      }
      array_push($roman_array_values, $number);
    }
  
    array_push($roman_array, 'S');
   
  for($i=0; $i<=strlen($roman)-1; $i++){
        if($roman_array[$i]=='I'){
            if($roman_array[$i+1]=='X' || $roman_array[$i+1]=='V'){
                $numb=$numb-$roman_array_values[$i];
            }
            else{
                $numb=$roman_array_values[$i]+$numb;
            }
        }
        elseif ($roman_array[$i]=='X') {
            if ($roman_array[$i+1]=='C' || $roman_array[$i+1]=='L') {
            $numb=$numb-$roman_array_values[$i];
            }
        
            else{
                $numb=$roman_array_values[$i]+$numb;
            }
        }
        else{
            $numb=$roman_array_values[$i]+$numb;
        }
    }
    return $numb;
}
print_r(solution ('MCMLIV'));
?>