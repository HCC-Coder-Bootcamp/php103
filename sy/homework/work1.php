<?php

	$username = readline('Username : ' . PHP_EOL . '');
	$password = (string)readline('Password : ' . PHP_EOL . '');


	if ($username == 'alice' || $username == 'Alice' || $username == 'ALICE') {

		if ($password == '12345') {
			$loginMessage = "Hello $username";
		} else {
			$loginMessage = "Wrong password";
		}

	} else if ($username == 'bob' || $username == 'Bob' || $username == 'BOB') {

		if ($password == '23456') {
			$loginMessage = "Hello $username";
		} else {
			$loginMessage = "Wrong password";
		}

	} else if ($username == 'cindy' || $username == 'Cindy' || $username == 'CINDY') {

		if ($password == 'a2ncd') {
			$loginMessage = "Hello $username";
		} else {
			$loginMessage = "Wrong password";
		}
		
	} else {

		$loginMessage = "404. Username not found";
	}

	echo $loginMessage . '. ' . PHP_EOL . '';