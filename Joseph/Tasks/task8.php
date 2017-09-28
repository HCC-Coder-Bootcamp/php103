<?php

$workerName = readline('What is your name, worker?' . PHP_EOL);

echo "Hi $workerName! Is time to get your salary!" . PHP_EOL;

$workingHours = (int)readline('In a week, how many hours do you work?' . PHP_EOL);

$fullTimeSalary    = 2000;
$weeklyWorkingHour = 40;
$otHourlyRate      = 40;
$cutCostSalary     = 12.5;
$partTimeRate      = 10;
$workingWeek       = 4;

if ($workingHours < $weeklyWorkingHour) {

	if ($workingHours == 0) {
		echo "You are fired!!";
	} else if ($workingHours < 0) {
		echo "Stop playing with me!";
	} else {
		
		$totalAmount = ($workingHours * $partTimeRate) * $workingWeek;
		echo "There you go. Your salary is RM $totalAmount.";
	} 
} else {
	
	if ($workingHours == $weeklyWorkingHour) {
		echo "There you go. Your salary is RM $fullTimeSalary.";
	} else if ($workingHours > $weeklyWorkingHour) {
		
		$otHours = $workingHours % $weeklyWorkingHour;
		$otSalary = ($otHours * $otHourlyRate) * $workingWeek;
		$totalAmount = $fullTimeSalary + $otSalary;
		echo "There you go. Your Salary is RM $totalAmount.";

	}
}