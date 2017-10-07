<?php

echo "Hi student! This is a test score validator." . PHP_EOL .
"Let me know what is your class and test score." . PHP_EOL;

$inputClass = readline('What is your class?' . PHP_EOL);
$inputScore = (int)readline('What is your score?' . PHP_EOL);

if ($inputClass == "a") {
	if ($inputScore >= 80 &&
	$inputScore <= 100) {
		$validate = "Congratulation Student!! You passed your test!";
	} else if ($inputScore < 80) {
		$validate = "Try harder next time!";
	}
} else if ($inputClass == "b") {
	if ($inputScore >= 70 &&
	$inputScore <= 100) {
		$validate = "Congratulation Student!! You passed your test!";
	} else if ($inputScore < 70) {
		$validate = "Try harder next time!";
	}
} else if ($inputClass == "c") {
	if ($inputScore >= 60 &&
	$inputScore <= 100) {
		$validate = "Congratulation Student!! You passed your test!";
	} else if ($inputScore < 60) {
		$validate = "Try harder next time!";
	}
} else if ($inputClass == "d") {
	if ($inputScore >= 50 &&
	$inputScore <= 100) {
		$validate = "Congratulation Student!! You passed your test!";
	} else if ($inputScore < 50) {
		$validate = "Try harder next time!";
	}
}
echo $validate;