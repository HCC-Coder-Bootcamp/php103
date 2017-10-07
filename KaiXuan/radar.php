<?php
	$enemyX = readline('The Enemy Position x = ');
	$enemyY = readline('The Enemy Position y = ');	
	$mypositionX = 79;
	$mypositionY = 52;
	$enemy = $enemyX + $enemyY;
	$me = $mypositionX + $mypositionY;
	$radar = $me - $enemy;
	if ($radar < 10) {
		echo "Danger! The enemy is coming soon ";
		system('cmd /k go.bat');	
	};
?>
