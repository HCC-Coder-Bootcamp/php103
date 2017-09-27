<?php

$inputWorkAs = readline('Do you work as Part Time? True or False?' . PHP_EOL);
$workingHours = (int)readline('In total, how many hours do you work?' . PHP_EOL);

if ($inputWorkAs === True) {
	
	$partTimeSalary = 10;

	$totalAmount = $workingHours * $partTimeSalary;

	echo "Your salary is RM $totalAmount";

} else {
	
	$fullTimeSalary = 2000;
	$fullTimeHour = 160;
	$otHourlyRate = 40;

	if ($workingHours > $fullTimeHour) {
		
		$otHours = $workingHours % $fullTimeHour;

		$otSalary = $otHours * $otHourlyRate;

		$totalAmount = $fullTimeSalary + $otSalary;

		echo "Your Salary is RM $totalAmount.";

	} else {
		echo "Your salary is RM $fullTimeSalary.";
	}
	
}