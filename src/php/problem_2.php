<?php

$first = ['a', 'b', 'c'];
$second = [1, 2, 3];

function combine($first, $second) {
    $result = [];
    $j = 0;
    $length = max(count($first), count($second));

    for ($i = 0; $i < $length; ++$i) {
        if (isset($first[$i]))
            $result[] = $first[$i];

        if (isset($second[$j]))
            $result[] = $second[$j++];
    }

    return $result;
}

function combineFor($first, $second) {
    $j = 0;
    $result = [];
    $length = max(count($first), count($second));

    for ($i = 0; $i < $length; ++$i) {
        if ($i < count($first))
            $result[$j++] = $first[$i];

        if ($i < count($second))
            $result[$j++] = $second[$i];
    }

    return $result;
}

print_r(combine($first, $second));
