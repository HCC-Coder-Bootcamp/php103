<?php

// Pass or fail validator

echo 'Welcome to Pass or fail validator!' . PHP_EOL;

$class = readline('Please enter the class : ');
$score = readline('Please enter the score : ');

$class_status = true;
if ($class == 'A') {
	if ($score >= 80){
		$status = 'passed';
	} else {
		$status = 'failed';
	}
} else if ($class == 'B') {
	if ($score >= 70){
		$status = 'passed';
	} else {
		$status = 'failed';
	}
} else if ($class == 'C') {
	if ($score >= 60){
		$status = 'passed';
	} else {
		$status = 'failed';
	}
} else if ($class == 'D') {
	if ($score >= 50){
		$status = 'passed';
	} else {
		$status = 'failed';
	}
} else {
	$class_status = false;
}
if ($score > 100) {
	$class_status = false;
}

$message = $class_status ? "You have $status with class $class!" : "Rejected";
echo $message . PHP_EOL;