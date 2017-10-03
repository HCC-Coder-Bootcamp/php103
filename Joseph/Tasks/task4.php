<?php

echo "Hi user! This is a number categoriser." . PHP_EOL . "When you give me a number, I will let you know whether it is positive or negetive and even or odd." . PHP_EOL;

$inputNumber = (int)readline('So, what is your number?' . PHP_EOL);

if ($inputNumber === 0) {
	echo "REJECT!";
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

	echo "Great! The answer is $greeting and $evenOrOdd.";
}