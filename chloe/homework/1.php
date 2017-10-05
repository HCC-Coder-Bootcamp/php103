<?php 

	$id  = readline('Username: ' . PHP_EOL);
	$pwd = readline('Password: ' . PHP_EOL);

	$idA = 'Alice';
	$idB = 'Bob'  ;
	$idC = 'Cindy';
	$pw1 = '12345';
	$pw2 = '23456';
	$pw3 = 'a2ncd';

	if ($id == $idA){
		if ($pwd == $pw1)
			$message = 'Hello, Alice' . PHP_EOL;
	}	
		else if ($id == $idB){
			if ($pwd == $pw2)
				$message = 'Hello, Bob' . PHP_EOL;
	}
		else if ($id == $idC){
			if ($pwd == $pw3)
				$message = 'Hello, Cindy' . PHP_EOL;
	}
		else {
			$message = 'Please try again' . PHP_EOL;
	}
echo "$message";