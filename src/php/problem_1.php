<?php

$nums = [1, 2, 3, 4];

function sumFor($nums) {
    $i = 0;
    $sum = 0;
    $length = count($nums);

    for ($i; $i < $length; ++$i) {
        $sum += $nums[$i];
    }

    return $sum;
}


function sumWhile($nums) {
    $i = 0;
    $sum = 0;
    $length = count($nums);

    while ($i < $length) {
        $sum += $nums[$i];
        ++$i;
    }

    return $sum;
}

function sumRecursion($nums, $i = 0) {
    if ($i < count($nums)) {
        return $nums[$i] + sumRecursion($nums, $i + 1);
    } else {
        return 0;
    }
}

echo sumWhile($nums);
