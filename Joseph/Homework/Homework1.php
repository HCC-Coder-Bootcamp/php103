<?php

$userName     = readline('Username :' . PHP_EOL);
$userPassword = readline('Password :' . PHP_EOL);

$userAlice = "alice";
$passAlice = 12345;

$userBob = "bob";
$passBob = 23456;

$userCindy = "cindy";
$passCindy = "a2ncd";

if ($userName == $userAlice) {
	
	if ($userPassword == $passAlice)
		echo "Hello, Alice!";
	else
		echo "REJECT!";
}

if ($userName == $userBob) {
	
	if ($userPassword == $passBob)
		echo "Hello, Bob!";
	else
		echo "REJECT!";
}

if ($userName == $userCindy) {
	
	if ($userPassword == $passCindy)
		echo "Hello, Cindy!";
	else
		echo "REJECT!";
}