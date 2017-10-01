<?php

echo "Gimme a year, i'll let you know is it leap year or not" . PHP_EOL;

$Year = readline('Year ' . PHP_EOL);

$LeapYearB1 = $Year % 100; 

$LeapYearB2 = $LeapYearB1 / 4;

$LeapYearB3 = $LeapYearB1 % 4;

$LeapYearF1 = ($Year - $LeapYearB1) / 100;

$LeapYearF2 = $LeapYearF1 % 4;

if ($LeapYearF2 == 0 AND $LeapYearB2 == 0 OR
	$LeapYearF2 != 0 AND $LeapYearB2 != 0 OR 
	$LeapYearF2 == 0 AND $LeapYearB3 == 0 ) {

	echo "$Year is a Leap Year";

}else{
	
	echo "$Year is Not a Leap Year";

}
