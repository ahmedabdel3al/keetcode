<?php

//Runtime 31 ms
// 19.84 MB
function isPalindrome($original) {
    if ($original < 0) return false;

    $reverseNum = 0;
    $tempOriginal = $original;

    while ($tempOriginal != 0) {
        $lastDigit = $tempOriginal % 10;
        $reverseNum = $reverseNum * 10 + $lastDigit;
        $tempOriginal = (int)($tempOriginal / 10);
    }

    return $reverseNum === $original;
}

echo isPalindrome(1221);


