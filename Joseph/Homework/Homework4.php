<?php

echo "This is a Leap Year machine. I will let you know whether or not it is a Leap Year." . PHP_EOL;

$inputYear = (int)readline('Please enter a year.' . PHP_EOL);

$leapYear  = $inputYear % 4;
$leapYear1 = $inputYear % 100;
$leapYear4 = $inputYear % 400;

if ($leapYear == 0) {
	if ($leapYear1 == 0 && $leapYear4 != 0) {
		$messege = "This year is not a Leap Year.";	
	} else {
		$messege = "This year is a Leap Year.";
	}
} else {
	$messege = "This Year is not a Leap Year.";
}
echo $messege;