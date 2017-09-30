<?php

echo 'Gimme some number NOW!!!' . PHP_EOL;

$NumberOne = readline('Number 1' . PHP_EOL);

$NumberTwo = readline('Number 2' . PHP_EOL);

$NumberThr = readline('Number 3' . PHP_EOL);

if ($NumberOne > $NumberTwo && $NumberOne > $NumberThr ) {

	echo "Number 1 : $NumberOne is Largest" . PHP_EOL;

} else if ($NumberTwo > $NumberOne && $NumberTwo > $NumberThr ) {

	echo "Number 2 : $NumberTwo is Largest" . PHP_EOL;

} else if ($NumberThr > $NumberOne && $NumberThr > $NumberTwo ) {

	echo "Number 3 : $NumberThr is Largest" . PHP_EOL;

}else{

	echo "No Largest number available";
	
}
