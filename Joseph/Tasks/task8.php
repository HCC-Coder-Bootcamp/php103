<?php

$inputWorkAs  = (int)readline('Do you work as Part Time? True(1) or False(0)?' . PHP_EOL);
$workingHours = (int)readline('In total, how many hours do you work?' . PHP_EOL);

$fullTimeSalary = 2000;
$fullTimeHour   = 160;
$otHourlyRate   = 40;
$cutCostSalary  = 12.5;
$partTimeRate   = 10;

if ($inputWorkAs === 1) {
	
	if ($workingHours > 0 && $workingHours < $fullTimeHour) {
		
		$totalAmount = $workingHours * $partTimeRate;

		echo "Your salary is RM $totalAmount.";

	} else if ($workingHours > 0 && $workingHours >= $fullTimeHour) {

		$totalAmount = $workingHours * $partTimeRate;

		echo "Your salary is RM $totalAmount. I would like you to join us as a full-time worker.";

	} else if ($workingHours == 0) {
		
		echo "You are fired!!";

	} else if ($workingHours < 0) {
		
		echo "Stop playing with me!";

	}

} else {
	
	if ($workingHours > $fullTimeHour) {
		
		$otHours = $workingHours % $fullTimeHour;

		$otSalary = $otHours * $otHourlyRate;

		$totalAmount = $fullTimeSalary + $otSalary;

		echo "Your Salary is RM $totalAmount.";

	} else if ($workingHours == $fullTimeHour) {
		
		echo "Your salary is RM $fullTimeSalary.";

	} else if ($workingHours < $fullTimeHour && $workingHours > 0) {
		
		$lazyTime = $fullTimeHour - $workingHours;

		$cutSalary = $lazyTime * $cutCostSalary;

		$leftOverSalary = $fullTimeSalary - $cutSalary;

		echo "Lazy People!! The boss cut your salary into RM $leftOverSalary.";

	} else if ($workingHours == 0) {
		
		echo "You are fired!!";

	} else if ($workingHours < 0) {
		
		echo "Stop playing with me!";

	}
}