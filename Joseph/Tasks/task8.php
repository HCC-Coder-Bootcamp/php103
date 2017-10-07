<?php

$workerName = readline('What is your name, worker?' . PHP_EOL);

echo "Hi $workerName! Is time to get your salary!" . PHP_EOL;

$workingHours = (int)readline('In a week, how many hours do you work?' . PHP_EOL);

$fullTimeSalary    = 2000;
$weeklyWorkingHour = 40;
$otHourlyRate      = 40;
$partTimeRate      = 10;
$workingWeek       = 4;

if ($workingHours < $weeklyWorkingHour) {

	if ($workingHours == 0) {
		$messege = "You are fired!!";
	} else if ($workingHours < 0) {
		$messege = "Stop playing with me!";
	} else {
		
		$totalAmount = ($workingHours * $partTimeRate) * $workingWeek;
		$messege = "There you go, $workerName. Your salary is RM $totalAmount.";
	} 
} else {
	
	if ($workingHours == $weeklyWorkingHour) {
		$messege = "There you go, $workerName. Your salary is RM $fullTimeSalary.";
	} else if ($workingHours > $weeklyWorkingHour) {
		
		$otHours = $workingHours % $weeklyWorkingHour;
		$otSalary = ($otHours * $otHourlyRate) * $workingWeek;
		$totalAmount = $fullTimeSalary + $otSalary;
		$messege = "There you go, $workerName. Your Salary is RM $totalAmount.";

	}
}
echo $messege;