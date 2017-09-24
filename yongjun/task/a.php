<?php
// Greeting Machine

$time = readline('Please input time in international hour and minutes : ');

$time_hour = ($time - $time % 100)/100;
$time_minute = $time % 100;

if ($time_minute >= 60 || $time_hour >= 24 || $time < 0) {
	$message = 'Invalid Input';
} else {
	if ($time_hour < 12) {
		$greeting = 'Good Morning';
	} else if ($time_hour < 16) {
		$greeting = 'Good Afternoon';
	} else {
		$greeting = 'Good Evening';
	}
	$time_minute = $time_minute < 10 ? '0' . $time_minute : $time_minute;
	$message = "Now the time is $time_hour$time_minute, $greeting!";
}

echo $message . PHP_EOL;

?>