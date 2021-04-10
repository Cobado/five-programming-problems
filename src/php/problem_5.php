<?php

if (PHP_SAPI === 'cli')
  define("NL", "\n");
else
  define("NL", "<br>");

$total = 0;

function checkHundred($n = 1, $seq = [1]) {

	if($n === 9) {

		$sum = calc($seq);

		if($sum === 100) {
			echo "Summa: " . expression($seq) . " = " . $sum . NL;
			echo "######".NL;

			global $total;
			$total++;
		}

		return;
	}

	$n++;

	$a = $b = $c = $seq;
	array_push($a, '-' . $n);
	array_push($b, '+' . $n);
	array_push($c, $n);

	checkHundred($n, $a);
	checkHundred($n, $b);
	checkHundred($n, $c);
}

function expression($seq) {
	$s = '';
	foreach ($seq as $v) {
		$s = $s . $v;
	}
	return $s;
}

function calc($seq) {
	return eval('return ' . expression($seq) .';');
}

checkHundred();

echo NL . "Total: " . $total . NL;
