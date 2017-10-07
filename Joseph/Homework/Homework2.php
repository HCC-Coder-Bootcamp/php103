<?php

echo "Please type in 5 different numbers, 
and I'll let you know which is the smallest." . PHP_EOL;

$inputNumber1 = (int)readline('What is the first number? ' . PHP_EOL);
$inputNumber2 = (int)readline('What is the second number?' . PHP_EOL);
$inputNumber3 = (int)readline('What is the third number? ' . PHP_EOL);
$inputNumber4 = (int)readline('What is the fourth number?' . PHP_EOL);
$inputNumber5 = (int)readline('What is the fifth number? ' . PHP_EOL);

if ($inputNumber1 < $inputNumber2 &&
	$inputNumber1 < $inputNumber3 &&
	$inputNumber1 < $inputNumber4 &&
	$inputNumber1 < $inputNumber5) {
	$answer =  $inputNumber1;
} else if ($inputNumber2 < $inputNumber1 &&
	$inputNumber2 < $inputNumber3 &&
	$inputNumber2 < $inputNumber4 &&
	$inputNumber2 < $inputNumber5) {
	$answer =  $inputNumber2;
} else if ($inputNumber3 < $inputNumber1 &&
	$inputNumber3 < $inputNumber2 &&
	$inputNumber3 < $inputNumber4 &&
	$inputNumber3 < $inputNumber5) {
	$answer =  $inputNumber3;
} else if ($inputNumber4 < $inputNumber1 &&
	$inputNumber4 < $inputNumber2 &&
	$inputNumber4 < $inputNumber3 &&
	$inputNumber4 < $inputNumber5) {
	$answer =  $inputNumber4;
} else {
	$answer =  $inputNumber5;
}
echo "$answer is the smallest.";