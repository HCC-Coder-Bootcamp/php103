<?php

echo "Hi soldier! This is a radar distance detector." . PHP_EOL . "You can use it to detect you enemy location." . PHP_EOL;

$enemyDistanceX = (int)readline('Please enter the X position of your enemy.' . PHP_EOL);
$enemyDistanceY = (int)readline('Please enter the Y position of your enemy.' . PHP_EOL);

$myDistanceX = 79;
$myDistanceY = 52;

$myDistance      = sqrt(pow($myDistanceX, 2) + pow($myDistanceY, 2));
$enemyDistance   = sqrt(pow($enemyDistanceX, 2) + pow($enemyDistanceY, 2));

$distanceBetween = $myDistance - $enemyDistance;

if ($distanceBetween == 0) {
	$status = "You are dead.";
} else if ($distanceBetween <= 2 || $distanceBetween >= -2) {
	$status = "Beep!!!";
} else if ($distanceBetween <= 10 || $distanceBetween >= -10) {
	$status = "Warning! The enemy is close!";
} else if ($distanceBetween > 10 || $distanceBetween < -10) {
	$status = "You are safe now.";
}
echo $status;