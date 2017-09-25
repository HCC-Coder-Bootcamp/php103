<?php 

$userName = readline('What is your name?' . PHP_EOL);

$timeInput = (int)readline('Please enter the international time.' . PHP_EOL);

if ($timeInput < 0) {
	echo "Error";
} else if ($timeInput < 1200) {
	echo "Good Morning, $userName!!";
} else if ($timeInput < 1600) {
	echo "Good Afternoon, $userName!!";
} else if ($timeInput < 2200) {
	echo "Good Evening, $userName!!";	
} else if ($timeInput < 2400) {
	echo "Good Night, $userName!!";
} else if ($timeInput >= 2400) {
	 echo "Error";
}