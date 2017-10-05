<?php 

$userName = readline('What is your name?' . PHP_EOL);

$timeInput = (int)readline('Please enter the international time.' . PHP_EOL);

$remainingMinutes = $timeInput % 100;
$hours = ($timeInput - $remainingMinutes) / 100;

if ($remainingMinutes >= 60 || $hours < 0 || $hours > 23) {
	echo "ERROR!";
} else {
	
	if ($hours < 6)
		$greeting = "Please have a rest, $userName";
	else if ($hours < 12)
		$greeting = "Good Morning, $userName";
	else if ($hours < 16)
		$greeting = "Good Afternoon, $userName";
	else if ($hours < 22)
		$greeting = "Good Evening, $userName";
	else
		$greeting = "Good Night, $userName";

	echo $greeting;
}