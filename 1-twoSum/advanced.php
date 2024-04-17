<?php

//O(n)
function twoSum($values, $target)
{
    $assocativeArray = [];
    foreach ($values as $key => $value) {
        $compliant = $target - $value;

        if (isset($assocativeArray[$compliant])) {
            return [$assocativeArray[$compliant], $key];
        }

        $assocativeArray[$value] = $key;
    }
}

$values = [2, 3, 4];
$target = 5;

var_dump(twoSum($values, $target));
$values = [3,3];
$target= 6;
var_dump(twoSum($values, $target));

