<?php

require __DIR__ . '/../vendor/autoload.php';


/**
 * @param String[] $strs
 * // * @return String
 */
function longestCommonPrefix(array $strs)
{
    if (count($strs) == 1) return $strs[0];
    $stringCompare = compareTwoStrings($strs[0], $strs[1]);

    if (!$stringCompare) return '';

    $i = 2;
    while ($i < count($strs)) {
        $stringCompare = compareTwoStrings($stringCompare, $strs[$i]);
        if (!$stringCompare) break;
        $i++;
    }

    return $stringCompare;

}

function compareTwoStrings($str1, $str2)
{
    $compare = '';
    $i = 0;
    while ($i < strlen($str1)) {
        if (!isset($str1[$i]) || !isset($str2[$i]) || $str1[$i] != $str2[$i]) {
            break;
        }
        $compare .= $str1[$i];
        $i++;
    }

    return $compare;
}


dump(longestCommonPrefix(["flower", "flow", "flight"]));