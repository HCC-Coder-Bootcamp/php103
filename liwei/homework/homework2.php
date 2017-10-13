<?php

echo 'Gimme 5 number!!' . PHP_EOL;

$Number1 = readline('Number1 ' . PHP_EOL);

$Number2 = readline('Number2 ' . PHP_EOL);

$Number3 = readline('Number3 ' . PHP_EOL);

$Number4 = readline('Number4 ' . PHP_EOL);

$Number5 = readline('Number5 ' . PHP_EOL);

if ($Number1 < $Number2 && $Number1 < $Number3) {

	if ($Number1 < $Number4 && $Number1 < $Number5) {
		
		echo "$Number1 is smallest";

	}else if ($Number1 < $Number4 && $Number1 > $Number5) {
		
		echo "$Number5 is smallest";

	}else{

		echo "$Number4 is smallest";

	}

}else if ($Number2 < $Number3 && $Number2 < $Number4) {

	if ($Number2 < $Number5) {
		
		echo "$Number5 is smallest";

	}else{

		echo "$Number2 is smallest";
	}
	
}else if ($Number3 < $Number4 && $Number3 < $Number5) {

	echo "$Number3 is smallest";

}else{

	 if ($Number4 < $Number5){

	 	echo "$Number4 is smallest"; 

	 }else{

	 	echo "$Number5 is smallest";

	 }
	
}

