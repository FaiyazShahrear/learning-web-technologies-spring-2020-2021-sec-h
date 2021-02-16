<?php
	
	$number1 = 44;
	$number2 = 99;
	$number3 = 108;

	$maximum = 0;
	if($number1 > $number2 && $number1 > $number3) $maximum = $number1;
	elseif ($number2 > $number1 && $number2 > $number3) $maximum = $number2;
	else $maximum = $number3;

	echo "The largest number among $number1, $number2 and $number3 is $maximum"; 


?>