<?php

$inputNumber = (int)readline('Give me a number.' . PHP_EOL);

if ($inputNumber === 0) {
	echo "REJECT!" . PHP_EOL;
} else {

	if ($inputNumber > 0) {
		$greeting = "Positive";
	} else if ($inputNumber < 0) {
		$greeting = "Negetive";
	}

	if ($inputNumber % 2 === 0) {
		$evenOrOdd = "Even";
	} else {
		$evenOrOdd = "Odd";
	}

	echo "$greeting and $evenOrOdd";
}