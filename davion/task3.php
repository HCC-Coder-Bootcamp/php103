<?php
$digits= readline('Whats is your number?' . PHP_EOL);

$tenthousand = ((($digits%10-$digits%1)/1)*1);
$thousand = ((($digits%100-$digits%10)/10)*1);
$hundred = ((($digits%1000-$digits%100)/100)*1);

echo 'Greatest value' . PHP_EOL;

echo(max($tenthousand,$thousand,$hundred));

if ($tenthousand > $thousand) {
	if ($thousand > $hundred){
		echo $thousand;
	} else {
		echo $hundred;
	}
} else {
	if ($tenthousand > $hundred){
		echo $tenthousand;
	} else{
		echo $hundred;
	}
}

echo(min($tenthousand,$thousand,$hundred));

?>
