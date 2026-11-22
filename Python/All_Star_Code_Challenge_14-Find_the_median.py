#  Your non-profit company has assigned you the task of calculating some simple statistics on donations. You have an array of integers, representing various amounts of donations your company has been given. In particular, you're interested in the median value for donations.

#  The median is the middle number of a sorted list of numbers. If the list is of even length, the 2 middle values are averaged.

#  Write a function that takes an array of integers as an argument and returns the median of those integers.

#  Notes:

#      The sorting step is vital.
#      Input arrays are non-empty.

# Examples

#  Median of [33,99,100,30,29,50] is 41.5.
#  Median of [3,2,1] is 2.

#####################################################################################################################################################################################
# Why cant i use round() function in python to round the median value to 2 decimal places?                                                                                          #
#                                                                                                                                                                                   #
# Python's round() uses round half to even (also known as banker's rounding or convergent rounding) to prevent systematic upward bias in large datasets.                            #
# This means that python will always round to the nearest even number when the value is exactly halfway between two numbers.                                                        #
#  For example, round(2.5, 0) will return 2.0, while round(3.5, 0) will return 4.0. This can lead to unexpected results when rounding median values, especially if                  #
# the dataset has many values that are exactly halfway between two numbers.                                                                                                         #
#####################################################################################################################################################################################

def median(array):
    array.sort()
    size_array = len(array)
    if(size_array % 2 == 0):
        return ((array[(size_array//2)-1]+array[size_array//2])/2)
    else:
        return array[(size_array//2)]
        