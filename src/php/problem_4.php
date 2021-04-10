<?php

$nums = [50, 2, 1, 9];

function compare($x, $y) {
    $xy = $y.$x;

    $yx = $x.$y;

    return strcmp($xy, $yx) > 0 ? 1 : 0;
}

function largestNum($nums) {
    $largest = '';
    $nums = array_map('strval', $nums);
    usort($nums, "compare");

    for ($i = 0; $i < count($nums); ++$i) {
        $largest .= $nums[$i];
    }

    return intval($largest);
}

echo largestNum($nums);
