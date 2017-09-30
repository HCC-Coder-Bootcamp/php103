<?php

echo 'What time is it now?!!' . PHP_EOL;

$TimeHour = readline('Hour' . PHP_EOL);

$TimeMin =  readline('Minutes' . PHP_EOL);

if ($TimeHour <= 11 AND $TimeHour >= 0 AND $TimeMin < 60) {

	echo "Good Morning!";

} else if ($TimeHour >= 12 AND $TimeHour <= 17 AND $TimeMin < 60) {

	echo "Good Afternoon!";

} else if ($TimeHour >= 18 AND $TimeHour <= 23 AND $TimeMin < 60) {

	echo "Good Evening!";

}else{

	echo "What?!!";
	
}

?>