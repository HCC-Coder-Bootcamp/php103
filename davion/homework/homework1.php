<?php

$username = readline('Whats is your username?' . PHP_EOL);
$password = readline('What is your password?' . PHP_EOL);


if ($username == 'alice' && $password == '12345') {
	echo 'hello' . PHP_EOL;
} else if ($username == 'bob' && $password == '23456') {
	echo 'hello' . PHP_EOL;	
} else if ($username == 'cindy' && $password == 'a2ncd') {
	echo 'hello' . PHP_EOL;
} else if ($username !== 'alice' && $password !== '12345') {
	echo 'reject' . PHP_EOL;	
} else if ($username !== 'bob' && $password !== '23456') {
	echo 'reject' . PHP_EOL;
} else if ($username !== 'cindy' && $password !== 'a2ncd') {
	echo 'reject' . PHP_EOL;	
}

?>



