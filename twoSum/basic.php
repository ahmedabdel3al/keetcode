<?php


//O(n^2)
function twoSum($nums, $target)
{
    $resultOfIndex = [];
    foreach ($nums as $key => $value) {
        if (!empty($resultOfIndex)) break;
        foreach ($nums as $index => $newValue) {
            if ($index == $key) continue;

            if ($value + $newValue == $target) {
                $resultOfIndex = [$key, $index];
                break;
            }
        }
    }

    return $resultOfIndex;
}


$values = [2, 3, 4];
$target = 5;

var_dump(twoSum($values, $target));
$values = [3,3];
$target= 6;
var_dump(twoSum($values, $target));