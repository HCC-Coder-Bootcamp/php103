<?php

echo "Please type in 3 different numbers, and I'll let you know which is the largest." . PHP_EOL;

$inputNumber1 = (int)readline('What is the first number?' . PHP_EOL);
$inputNumber2 = (int)readline('What is the second number?' . PHP_EOL);
$inputNumber3 = (int)readline('What is the last number?' . PHP_EOL);

if ($inputNumber1 > $inputNumber2 && $inputNumber1 > $inputNumber3) {
	echo "$inputNumber1 is the largest.";
} else if ($inputNumber2 > $inputNumber1 && $inputNumber2 > $inputNumber3) {
	echo "$inputNumber2 is the largest.";
} else if ($inputNumber3 > $inputNumber1 && $inputNumber3 > $inputNumber2) {
	echo "$inputNumber3 is the largest.";
}