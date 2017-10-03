<?php 
	$class = readline('Please input class = ');
	$score = readline('Please input score = ');
	if ($class !="A" && $class !="a" && $class !="B" && $class !="b" && $class !="C" && $class !="c" && $class !="D" && $class !="d"   ) {
		echo"Class error! Please input the correct class";
	}else if ($class = "A" && $score >= 80) {
		echo "pass";
	}else if ($class = "B" && $score >= 70) {
		echo "pass";
	}else if ($class = "C" && $score >= 60) {
		echo "pass";
	}else if ($class = "D" && $score >= 50) {
		echo "pass";
	}else {
		echo "fail";
	};

?>
