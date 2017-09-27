<?php

$Result = readline('Gimme your Result!!!' . PHP_EOL);

if ($Result >= 80 && $Result <= 100 ) {

	echo "Passed! Gred A! Impressive!" . PHP_EOL;

} else if ($Result >= 70 && $Result <= 79 ) {

	echo "Passed! Gred B! Good!" . PHP_EOL;

} else if ($Result >= 60 && $Result <= 69 ) {

	echo "Passes! Gred C! Nice!" . PHP_EOL;

} else if ($Result >= 50 && $Result <= 59 ) {

	echo "Passed! Gred C! Cool!" . PHP_EOL;

} else if ($Result >= 39 && $Result >= 0 ) {

	echo "Failed! Oh No! Keep Fighting!" . PHP_EOL;
			
}else{

	echo "Wrong result";
	
}
