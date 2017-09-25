<?php

// Number categoriser
echo 'This is an application that help you to check a number is odd or even number.' . PHP_EOL;

$input = readline('Please enter a number : ');

if ($input == 0) {
	$message = 'Rejected !';
} else {
	if ($input % 2) {
		$status = 'odd';
	} else {
		$status = 'even';
	}

	if ($input > 0){
		$sign = 'positive';
	} else {
		$sign = 'negative';
	}

	$message = "$input is a $sign, $status number.";
}

echo $message . PHP_EOL;

?>