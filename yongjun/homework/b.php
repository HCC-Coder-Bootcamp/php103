<?php

echo "
 .--.                 .-.  .-.              .-. 
: .--'                : :  : :             .' `.
`. `. ,-.,-.,-. .--.  : :  : :   .--.  .--.`. .'
 _`, :: ,. ,. :' .; ; : :_ : :_ ' '_.'`._-.': : 
`.__.':_;:_;:_;`.__,_;`.__;`.__;`.__.'`.__.':_; " . PHP_EOL . PHP_EOL;
echo "
 .-..-.               .-.              
: `: :               : :              
: .` :.-..-.,-.,-.,-.: `-.  .--. .--. 
: :. :: :; :: ,. ,. :' .; :' '_.': ..'
:_;:_;`.__.':_;:_;:_;`.__.'`.__.':_;  " . PHP_EOL . PHP_EOL;
echo "
 .--.        .-.              .-.         .-.           
: .--'       : :              : :        .' `.          
: :    .--.  : :   .--. .-..-.: :   .--. `. .'.--. .--. 
: :__ ' .; ; : :_ '  ..': :; :: :_ ' .; ; : :' .; :: ..'
`.__.'`.__,_;`.__;`.__.'`.__.'`.__;`.__,_;:_;`.__.':_;  " . PHP_EOL . PHP_EOL;
echo 'Please enter 5 number, and I will find the smallest value' . PHP_EOL;

$number = readline('Please enter the first number: ');

$smallest = $number;

$number = readline('Please enter the second number: ');

if ($number < $smallest) {
	$smallest = $number;
}

$number = readline('Please enter the third number: ');

if ($number < $smallest) {
	$smallest = $number;
}

$number = readline('Please enter the fourth number: ');

if ($number < $smallest) {
	$smallest = $number;
}

$number = readline('Please enter the fifth number: ');

if ($number < $smallest) {
	$smallest = $number;
}

$respond = readline("The smallest number is $smallest, am I cleaver? (yes/no)" . PHP_EOL);

if ($respond == 'yes') {
	$message = 'Nice! Thank you!';
} elseif ($respond == 'no') {
	$message = 'Too bad! Bye!';
} else {
	$message = 'What are you talking?';
}

echo $message . PHP_EOL;