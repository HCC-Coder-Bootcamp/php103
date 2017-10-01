<?php

echo 'What number you want?!!' . PHP_EOL;

$Number = readline('Number' . PHP_EOL);

$Result = $Number % 2 ;

if ($Number < 0 && $Result == 0 ) {

	echo "Negative!" . PHP_EOL;

	echo "Even Number" . PHP_EOL;

} else if ($Number < 0 && $Result != 0 ) {

	echo "Negative!" . PHP_EOL;

	echo "Odd Number" . PHP_EOL;

} else if ($Number > 0 && $Result == 0 ) {

	echo "Positive!" . PHP_EOL;

	echo "Even Number" . PHP_EOL;

} else if ($Number > 0 && $Result != 0 ) {

	echo "Positive!" . PHP_EOL;

	echo "Odd Number" . PHP_EOL;

}else{

	echo "What?!!";
	
}
