<?php
	$number1 = 5;
	var_dump(is_int($number1));
	echo '<br>';
	
	var_dump(is_integer($number1));
	echo '<br>';
	
	var_dump(is_long($number1));
	echo '<br>';
	
	$number2 = 10.23;
	var_dump(is_float($number2));
	echo '<br>';
	
	var_dump(is_double($number2));
	echo '<br>';
	
	$number3 = 1.9e411;
	var_dump(is_finite($number3));
	echo '<br>';
	
	var_dump(is_infinite($number3));
	echo '<br>';
	
	$number4 = acos(8);
	var_dump(is_nan($number4));
	echo '<br>';
	
	$number5 = 58;
	$number6 = 58.85;
	$number7 = '5' + 5;
	$number8 = 'Syed';
	
	var_dump(is_numeric($number5));
	echo '<br>';
	
	var_dump(is_numeric($number6));
	echo '<br>';
	
	var_dump(is_numeric($number7));
	echo '<br>';
	
	var_dump(is_numeric($number8));
	echo '<br>';
	
	$number9 = 20.01;
	$number10 = '20.0111111';
	
	var_dump((int)$number9);
	echo '<br>';
	
	var_dump((int)$number10);
	echo '<br>';
?>