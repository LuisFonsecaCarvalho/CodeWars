<!-- Your task is to make function, which returns the sum of a sequence of integers.

The sequence is defined by 3 non-negative values: begin, end, step.

If begin value is greater than the end, function should returns 0

Examples

sequence_sum(2, 2, 2); // => 2
sequence_sum(2, 6, 2); // => 12 (= 2 + 4 + 6)
sequence_sum(1, 5, 1); // => 15 (= 1 + 2 + 3 + 4 + 5)
sequence_sum(1, 5, 3); // => 5 (= 1 + 4)

This is the first kata in the series:

    Sum of a sequence (this kata)
    Sum of a Sequence [Hard-Core Version]
 -->

<?php

function sequence_sum(int $begin, int $end, int $step): int
{
    // May the Force be with you
    $a = 0;
    for ($i = $begin; $i <= $end; $i = $i + $step) {
        $a += $i;
    }
    return ($begin > $end) ? 0 : $a;
};
//Best solution
// function sequence_sum(int $begin, int $end, int $step): int {
//     $sum = 0;
//     for ($begin; $begin <= $end; $begin += $step) {
//       $sum += $begin;
//     }
//     return $sum;
//   }
//OR
// function sequence_sum($b,$e,$s) {
//     return $b>=$e?0:($b+$s>$e?$b:array_sum(range($b,$e,$s)));
//   }
?>