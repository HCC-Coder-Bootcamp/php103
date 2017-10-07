<?php
$tenthousand = readline('first number?' . PHP_EOL);
$thousand = readline('second number?' . PHP_EOL);
$hundred = readline('third number?' . PHP_EOL);

echo 'Greatest value' . PHP_EOL;

if ($tenthousand < $thousand) {
	if ($thousand < $hundred) { 
		$hi = $hundred;
	} else {
		$hi =  $thousand;
	}
} else {
	if ($tenthousand < $hundred) {
		$hi = $hundred;
	} else {
		$hi = $tenthousand;
	}
}

echo $hi;

?>
