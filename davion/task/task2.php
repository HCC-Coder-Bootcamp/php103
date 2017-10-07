<?php
$number = readline(' Task 1 = Whats is your number ?' . PHP_EOL);


if ($number >= 1){
	echo 'positive' . PHP_EOL;
} else if ($number <= -1){
	echo 'negative' . PHP_EOL;
} else if ($number = 0){
	echo 'reject' . PHP_EOL;
}

if ($number % 2 == 0) {
	echo 'even number' . PHP_EOL;
} else if ($number % 2 != 0) {
	echo 'odd number' . PHP_EOL;
}

?>
