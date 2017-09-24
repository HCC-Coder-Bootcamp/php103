<?php

// Pay calculator, OT vs Part time pay
$partTimeHourlyRate = 10;
$OTRate = 40;
$fullTimeBasicPay = 2000;
$weeklyWorkingHours = 40;
$numberOfWeek = 4;


echo 'This is a pay calculator' . PHP_EOL;

$totalWorkingHours = readline('Please enter your working hours : ');

$partTimePay = $totalWorkingHours * $partTimeHourlyRate;
$OTPay = ($totalWorkingHours - ($weeklyWorkingHours * $numberOfWeek))* $OTRate;
$fullTimePay = $fullTimeBasicPay + $OTPay;
if ($totalWorkingHours < 0){
	echo "INVALID !";
} else {
	if ($totalWorkingHours < $weeklyWorkingHours * $numberOfWeek){
		$message = "" .
		"Part time ::" . PHP_EOL .
		" Salary        : $partTimePay";
	} else {
		$message = "" .
		"Full Time ::" . PHP_EOL .
		" Basic salary  : $fullTimeBasicPay" . PHP_EOL .
		" Over Time Pay : $OTPay" . PHP_EOL .
		" Total Salary  : $fullTimePay" . PHP_EOL .
		"Part Time ::" . PHP_EOL .
		" Salary        : $partTimePay";

	}
	echo $message . PHP_EOL;
}