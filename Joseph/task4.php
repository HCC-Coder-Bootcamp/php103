<?php 

$inputNumber = (int)readline('Give me a number.' . PHP_EOL);

echo "The answer is :";

if ($inputNumber = 0) {
	echo "REJECT!";
} else {

	if ($inputNumber > 0) {
		echo "Positive";
	} else if ($inputNumber < 0) {
		echo "Negetive";
	}

	echo (string)" and ";

	if ($inputNumber % 2 == 0) {
		echo "Even";
	} else {
		echo "Odd";	
	}
}