<?php

$userName  = readline('What is your name?' . PHP_EOL);
$timeInput = (int)readline('Please enter the international time.' . PHP_EOL);

$remainingMinutes = $timeInput % 100;

if ($remainingMinutes >= 60 || $timeInput < 0 ||
	$timeInput >= 2400) {
	$greeting = "ERROR!";
} else {
	
	if ($timeInput < 0600) {
		$greeting = "Please have a rest, $userName";
	} else if ($timeInput < 1200) {
		$greeting = "Good Morning, $userName";
	} else if ($timeInput < 1600) {
		$greeting = "Good Afternoon, $userName";
	} else if ($timeInput < 2200) {
		$greeting = "Good Evening, $userName";
	} else
		$greeting = "Good Night, $userName";
}
echo $greeting;