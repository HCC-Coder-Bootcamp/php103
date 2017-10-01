<?php

echo 'Welcome to FaceBug' . PHP_EOL;

echo 'Login Your Account to Continue' . PHP_EOL;

$UserName = readline('Username ' . PHP_EOL);

$Password =  readline('Password ' . PHP_EOL);

if ($UserName == "alice" && $Password == 12345 ) {

	echo "Login Successful~ Hello Alice~";

} else if ($UserName == "bob" && $Password == 23456 ) {

	echo "Login Successful~ Hello Bob~";

} else if ($UserName == "cindy" && $Password == "a2ncd" ) {

	echo "Login Successful~ Hello Cindy~";

}else{

	echo "Error, please try again";
	
}