<?php

echo "
.-.                        .-..-.                 
: :                        : :: :                 
: :    .--.  .--.  .---.   `.  .'.--.  .--.  .--. 
: :__ ' '_.'' .; ; : .; `   .' ;' '_.'' .; ; : ..'
:___.'`.__.'`.__,_;: ._.'  :_,' `.__.'`.__,_;:_;  
                   : :                            
                   :_;               " . PHP_EOL . PHP_EOL;
echo "
.---.       .-.            .-.           
: .  :     .' `.          .' `.          
: :: : .--.`. .'.--.  .--.`. .'.--. .--. 
: :; :' '_.': :' '_.''  ..': :' .; :: ..'
:___.'`.__.':_;`.__.'`.__.':_;`.__.':_;  " . PHP_EOL . PHP_EOL;

$year = readline('Please enter year: ');

$status = 'Normal Year';

if ($year % 4 == 0) {
	$status = 'Leap Year';
	if ($year % 100 == 0 && $year % 400 != 0 ) {
		$status = 'Normal Year';
	}
}

$message = "$year is a $status!";

echo $message . PHP_EOL;