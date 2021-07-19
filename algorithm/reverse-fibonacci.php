<?php
#hightech - It's not a bug, it's a feature
# PHP Program to print Fibonacci series in reverse order
function reverseFibonacci($n)
{
    # assigning first and second elements
    $a[0] = 0;
    $a[1] = 1;
    for ($i = 2; $i < $n; $i++) {
        # storing sum in the preceding location
        $a[$i] = $a[$i - 2] +
                 $a[$i - 1];
    }
    for ($i = $n - 1; $i >= 0; $i--) {
 
        # printing array in reverse order
        echo($a[$i] . " ");
    }
}
# Start from 50 to 0
$n = 50;
reverseFibonacci($n);
?>
