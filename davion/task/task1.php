<?php
$hour = readline('Whats is your hour ?' . PHP_EOL);
$minutes = (int)readline('What is your  minutes?' . PHP_EOL);


if ($hour >=24 || $minutes >=60) {
	echo 'invalid time' . PHP_EOL;
} else if ($hour  >= 12 && $hour <=18 && $minutes <=60) {
	echo 'good_morning' . PHP_EOL;	
} else if ($hour >= 6 && $hour <=12 && $minutes <=60) {
	echo 'noon' . PHP_EOL;
} else if ($hour >= 0 && $hour <=6 && $minutes <=60) {
	echo 'evening' . PHP_EOL;
} else if  ($hour >= 18 && $hour <=24 && $minutes <=60) {
	echo 'afternoon' . PHP_EOL;
}

?>


