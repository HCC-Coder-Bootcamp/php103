<?php

// Find the largest 3 numbers

echo 'Please enter 3 numbers, and I will find out the largest number.' . PHP_EOL;

$input1 = readline('Number 1 : ');
$input2 = readline('Number 2 : ');
$input3 = readline('Number 3 : ');

if ($input1 < $input2) {
	if ($input2 < $input3) {
		$max = $input3;
	} else {
		$max = $input2;
	}
} else {
	if ($input1 < $input3) {
		$max = $input3;
	} else {
		$max = $input1;
	}
}

echo 'The largest number is ' . $max . '.' . PHP_EOL;;

?>