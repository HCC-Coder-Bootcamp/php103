<?php

echo "
.-.   .-.      .-.                               .-..-.                 
: :.-.: :      : :                               : :: :                 
: :: :: : .--. : :   .--.  .--. ,-.,-.,-. .--.   : :: : .--.  .--. .--. 
: `' `' ;' '_.': :_ '  ..'' .; :: ,. ,. :' '_.'  : :; :`._-.'' '_.': ..'
 `.,`.,' `.__.'`.__;`.__.'`.__.':_;:_;:_;`.__.'  `.__.'`.__.'`.__.':_;  " . PHP_EOL . PHP_EOL;

$username = readline('Please enter your username: ');
$password = readline('Please enter your password: ');

// {'username' => 'alice', 'password' => '12345'}, 
// {'username' => 'bob', 'password' => '23456'},
// {'username' => 'cindy', 'password' => 'a2ncd'}

if ($username == 'alice') {
	if ($password == '12345') {
		$user = 'alice';
		$status = 'logged in';
	}
} elseif ($username == 'bob') {
	if ($password == '23456') {
		$user = 'bob';
		$status = 'logged in';
	}
} elseif ($username == 'cindy') {
	if ($password == 'a2ncd') {
		$user = 'cindy';
		$status = 'logged in';
	}
} else {
	$status = 'reject';
}

if ($status == 'logged in') {
	$message = "Welcome $user, have a nice day!";
} else {
	$message = "You have entered wrong username/password!";
}

echo $message . PHP_EOL;