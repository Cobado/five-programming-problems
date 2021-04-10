<?php

function fib() {
    $i = 2;
    $C = [0, 1];

    while ($i < 100) {
        $C[$i] = $C[$i - 1] + $C[$i - 2];
        ++$i;
    }

    return $C;
}

print_r(fib());
