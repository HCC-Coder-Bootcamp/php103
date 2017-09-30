<?php
echo "
.---.                   .-.  .-. 
: .; :                  : : .' `.
:   .' .--.  .--. .-..-.: : `. .'
: :.`.' '_.'`._-.': :; :: :_ : : 
:_;:_;`.__.'`.__.'`.__.'`.__;:_; " . PHP_EOL . PHP_EOL;
echo 'Let\'s enter your subject\'s score to know if you are passed!' . PHP_EOL;
$math = readline('Mathematics: ');
$lang = readline('Language: ');
$acc = readline('Account: ');
$sc = readline('Science: ');

if ($math <= 100 && $math >=0 && $lang <= 100 && $lang >=0 && $acc <= 100 && $acc >=0 && $sc <= 100 && $sc >=0) {
	$sum = $math + $lang + $acc + $sc;
	$avg = $sum / 4;
	if ($avg < 60) {
		$message = 'I am sorry that you have fail your exam with your average score ' . $avg . '.';
	} else {
		$message = 'Congratulation! You have passed your exam with your average score ' . $avg . '.';
	}
} else {
	$message = 'I think you had entered wrong value.';
}

echo $message . PHP_EOL;