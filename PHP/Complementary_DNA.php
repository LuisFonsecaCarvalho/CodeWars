<?php
function DNA_strand($dna) {
    $compDNA="";
    //The .= append a string to a string in php
    for($i=0; $i<strlen($dna);$i++){
      switch($dna[$i]){
          case 'A':
            $compDNA.="T";
            break;
          case 'T':
            $compDNA.="A";
            break;
          case 'C':
            $compDNA.="G";
            break;
          case 'G':
            $compDNA.="C";
            break;
      }
    }
    return $compDNA;
  }
//Best Soluction
//The strtr If given three arguments, this function returns a copy of string where all occurrences of each (single-byte) character in from have been translated to the corresponding character in to
// function DNA_strand($dna) {
//     return strtr($dna, 'ACGT', 'TGCA');
//   }
?>