<?php

$hour = readline(' What is your working hour in per month?' . PHP_EOL);

if ($hour <= 16) {
	$working = readline (' What is your standard?' . PHP_EOL . '1 = OT pay' . PHP_EOL . '2 = part time pay' . PHP_EOL . '3 = full time pay plus OT pay' . PHP_EOL . '4 = full time pay only' . PHP_EOL . PHP_EOL);
} elseif ($hour >16) {
	($working = 5) . PHP_EOL;
}



if ($working == 1){
	$OT_hourly_rate = 40 * $hour . PHP_EOL;
	echo $OT_hourly_rate . 'per day' . PHP_EOL;
} elseif ( $working == 2){
	$part_time_hourly_rate = 10 * $hour . PHP_EOL;
	echo $part_time_hourly_rate . 'per day' . PHP_EOL;
} elseif ( $working == 3){
	$bonus_full_time_rate = ((40 * $hour) * 28) + 2000 . PHP_EOL;
	echo $bonus_full_time_rate . 'per month' . PHP_EOL;
} elseif ( $working == 4){
	echo 2000 . PHP_EOL;
} elseif ( $working >= 5 ){
	echo 'error' . PHP_EOL;
}


?>