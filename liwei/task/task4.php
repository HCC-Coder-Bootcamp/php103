<?php

echo 'Gimme your Location!!!' . PHP_EOL;

$LocationX = readline('Location X' . PHP_EOL);

$LocationY = readline('Location Y' . PHP_EOL);

$MineX = 79 ;

$MineY = 52 ;

$LocationResult = (sqrt(pow(($MineX - $LocationX), 2) + pow(($MineY - $LocationY), 2)));

if ($LocationResult <= 10 AND $LocationResult > 2) {

	echo "Warning! Enemy close to mine!!" . PHP_EOL;

} else if ($LocationResult > 10 ) {

	echo "Far Away~" . PHP_EOL;

} else if ($LocationResult <= 2) {

	echo "\x07 Beep~Beep~Beep~Beep~" . PHP_EOL;

}else{

	echo "Wrong location";
	
}
