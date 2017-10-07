<?php

$userName     = readline('Username :' . PHP_EOL);
$userPassword = readline('Password :' . PHP_EOL);

$userAlice = "alice";
$passAlice = 12345;

$userBob = "bob";
$passBob = (int)"23456";

$userCindy = "cindy";
$passCindy = "a2ncd";

if ($userName == $userAlice) {
	
	if ($userPassword == $passAlice) {
		$greeting = "Hello, Alice!";
	} else {
		$greeting = "REJECT!";
	}
} else if ($userName == $userBob) {
	
	if ($userPassword == $passBob) {
		$greeting = "Hello, Bob!";
	} else {
		$greeting = "REJECT!";
	}
} else if ($userName == $userCindy) {
	
	if ($userPassword == $passCindy) {
		$greeting = "Hello, Cindy!";
	} else {
		$greeting = "REJECT!";
	}
}
echo $greeting;