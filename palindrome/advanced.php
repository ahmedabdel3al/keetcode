<?php


// run time 27 ms
function isPalindrome(int $value)
{
    if ($value < 0) return false;

    $reverseOfValue = strrev((string)$value);

    return $reverseOfValue == (string)$value;
}


var_dump(isPalindrome(121));
var_dump(isPalindrome(-121));
var_dump(isPalindrome(10));