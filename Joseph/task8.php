<?php

$inputHours = (int)readline('How many hours do you work?' . PHP_EOL);

$fullTimeHour = 40;
$fullTimeSalary = 2000;

if ($inputHours > 40) {
	$otHours = 40 % $inputHours;
}