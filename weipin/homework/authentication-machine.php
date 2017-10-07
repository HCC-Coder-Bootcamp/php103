<?php 	

	$inputUsername = readline("Username:" . PHP_EOL);
	$inputPassword = readline("Password:" . PHP_EOL);

	if ( $inputUsername === "alice" && $inputPassword === "12345" ) {
		echo "Hello";
	}

	else if ( $inputUsername ==="bob" && $inputPassword === "23456" ) {
		echo "Hello";
	}

	else if ( $inputUsername === "cindy" && $inputPassword === "a2ncd" ) {
		echo "Hello";
	}

	else {
		echo "Login fail";
	}

 ?>