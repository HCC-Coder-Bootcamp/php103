<?php

echo 'What time is it now?!!' . PHP_EOL;

$Time = readline('Time' . PHP_EOL);

$TimeMin = $Time % 100;

$TimeProcess = $Time - $TimeMin - 100;

$TimeHour = (($TimeProcess / 100) % 12 ) + 1;

if ($Time <= 1159 AND $Time >= 0 AND $TimeMin < 60) {

	echo "Good Morning! It's $TimeHour : $TimeMin AM!";

} else if ($Time >= 1200 AND $Time <= 1759 AND $TimeMin < 60) {

	echo "Good Afternoon! It's $TimeHour : $TimeMin PM!";

} else if ($Time >= 1800 AND $Time <= 2359 AND $TimeMin < 60) {

	echo "Good Evening! It's $TimeHour : $TimeMin PM!";

}else{

	echo "What?!!";
	
}
