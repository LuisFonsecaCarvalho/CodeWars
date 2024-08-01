/* 
URL:https://www.codewars.com/kata/58167fa1f544130dcf000317/train/sql
For this challenge you need to create a simple SELECT statement. Your task is to calculate the MIN, MEDIAN and MAX scores of the students from the results table.
Tables and relationship below:
Resultant table:

    min
    median
    max

 */

 -- Create your SELECT statement here
SELECT 
  MIN(score), 
  percentile_cont(0.5) within group (order by score)  as median,
  MAX(score)
FROM result 

/*  -Percentile split the values in parts equal to the given percentual (ex 0.5=50%=>2 equal parts)

    -percentile_disc: will return a value from the input set closest to the percentile you request

    -percentile_cont: will return an interpolated value between multiple values based on the 
                      distribution. You can think of this as being more accurate, but can return 
                      a fractional value between the two values from the input
 */