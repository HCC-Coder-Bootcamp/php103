<?php 

$input = readline('time' . PHP_EOL);

$minutes = $input % 100;

if ($minutes >= 60 || $input <= 0 || $input >= 2400) {
	$messege = "ERROR";
} else {

	if ($input < 1200) {
		$messege = "Good Morning";
	} else if ($input < 1600) {
		$messege = "Good Afternoon";
	} else  if ($input < 2200) {
		$messege = "Good Evening";
	} else if ($input < 2400) {
		$messege = "Good Night";
	} 
 }
 echo $messege;