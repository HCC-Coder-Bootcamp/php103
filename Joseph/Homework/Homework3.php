<?php

$mathematicScore = (float)readline('What is your score for Math?      ' . PHP_EOL);
$languageScore   = (float)readline('What is your score for Language?  ' . PHP_EOL);
$accountingScore = (float)readline('WHat is your score for Accounting?' . PHP_EOL);
$scienceScore    = (float)readline('What is your score for Science?   ' . PHP_EOL);

$totalScore   = $mathematicScore + $languageScore + $accountingScore + $scienceScore;
$averageScore = $totalScore / 4;

if ($mathematicScore > 100 || $languageScore > 100 || $accountingScore > 100 || $scienceScore > 100) {
	echo "REJECT! Invalid input out of range!";
} else {

	if ($averageScore >= 60)
		echo "Your average score is " . number_format((float)$averageScore, 2, '.', '') . "%.";
	else if ($averageScore < 60)
		echo "Work hard next time!!";
}