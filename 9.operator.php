<?php
	//	PHP Arithmetic Operators
	$number1 = 10;  
	$number2 = 6;
	echo $number1 + $number2; // Addition
	echo '<br>';
	
	echo $number1 - $number2; // Subtration
	echo '<br>';
	
	echo $number1 * $number2; // Multiplication
	echo '<br>';
	
	echo $number1 / $number2; // Division
	echo '<br>';
	
	echo $number1 % $number2; // Modulus
	echo '<br>';
	
	echo $number1 ** $number2; // exponentiation
	echo '<br>';
	
	//	PHP Assignment Operators
	$number3 = 5; // Assignment operator
	$number4 = 15; // Assignment operator
	$number5 = 19; // Assignment operator
	$number6 = 21; // Assignment operator
	$number7 = 29; // Assignment operator
	
	echo $number3;
	echo '<br>';
	
	$number3 += $number3; // Assignment operator - Addition
	echo $number3;
	echo '<br>';
	
	$number4 -= $number3; // Assignment operator - Subtration
	echo $number4;
	echo '<br>';
	
	$number5 *= $number3; // Assignment operator - Multiplication
	echo $number5;
	echo '<br>';
	
	$number6 /= $number3; // Assignment operator - Division
	echo $number6;
	echo '<br>';
	
	$number7 %= $number3; // Assignment operator - Modulus
	echo $number7;
	echo '<br>';
	
	// 	PHP Comparison Operators
	$number8 = 100;  
	$number9 = "100";

	var_dump($number8 == $number9); // returns true because values are equal
	echo '<br>';
	
	var_dump($number8 === $number9); // returns false because types are not equal
	echo '<br>';
	
	var_dump($number8 != $number9);  // returns false because values are equal
	echo '<br>';
	
	var_dump($number8 <> $number9);  // returns false because values are equal
	echo '<br>';
	
	var_dump($number8 !== $number9);  // returns true because types are not equal
	echo '<br>';
	
	$number10 = 100;  
	$number11 = 50;
	
	var_dump($number10 > $number11);  // returns true because $number10 is greater than $number11
	echo '<br>';
	
	var_dump($number10 < $number11);  // returns false because $number10 is smaller than $number11
	echo '<br>';
	
	$number12 = 50;
	$number13 = 50;
	
	var_dump($number12 >= $number13);  // returns true because $number12 is greater than or equal to $number13
	echo '<br>';
	
	var_dump($number12 <= $number13);  // returns true because $number12 is greater than or equal to $number13
	echo '<br>';
	
	$number15 = 5;  
	$number16 = 10;

	echo ($number15 <=> $number16); // returns -1 because $number15 is less than $number16
	echo "<br>";

	$number17 = 10;  
	$number18 = 10;

	echo ($number17 <=> $number18); // returns 0 because values are equal
	echo "<br>";

	$number19 = 15;  
	$number20 = 10;

	echo ($number19 <=> $number20); // returns +1 because $number19 is greater than $number20
	echo '<br>';
	
	//	PHP Increment / Decrement Operators
	$number21 = 10;  
	echo ++$number21; // Pre-increment
	echo '<br>';
	
	$number22 = 10;  
	echo $number22++; // Post-increment
	echo '<br>';
	
	$number23 = 10;  
	echo --$number23; // Pre-decrement
	echo '<br>';
	
	$number24 = 10;  
	echo $number24--; // Post-decrement
	echo '<br>';
	
	//	PHP Logical Operators
	$number25 = 100;  
	$number26 = 50;

	if ($number25 == 100 and $number26 == 50) {
		echo "And operator";
	}
	echo '<br>';
	
	if ($number25 == 100 or $number26 == 100) {
		echo "Or operator";
	}
	echo '<br>';
	
	if ($number25 == 100 xor $number26 == 80) {
		echo "Xor operator";
	}
	echo '<br>';
	
	if ($number25 == 100 && $number26 == 50) {
		echo "And operator";
	}
	echo '<br>';
	
	if ($number25 == 100 || $number26 == 100) {
		echo "Or operator";
	}
	echo '<br>';
	
	if ($number25 !== 10) {
		echo "Xor operator";
	}
	echo '<br>';
	
	//	PHP String Operators
	$txt1 = "Hello";
	$txt2 = " world!";
	$txt1 .= $txt2;
	echo $txt1;
	echo '<br>';
	
	echo $txt1 . $txt2;
	echo '<br>';
	
	//	PHP Array Operators
	$string1 = array("a" => "red", "b" => "green");  
	$string2 = array("c" => "blue", "d" => "yellow");  

	print_r($string1 + $string2); // union of $string1 and $string2
	echo '<br>';
	
	var_dump($string1 == $string2); // 	Returns true if $string1 and $string2 have the same key/value pairs
	echo '<br>';

	var_dump($string1 === $string2); // 	Returns true if $string1 and $string2 have the same key/value pairs in the same order and of the same types
	echo '<br>';

	var_dump($string1 != $string2); // 	Returns true if $string1 is not equal to $string2
	echo '<br>';

	var_dump($string1 <> $string2); //	Returns true if $string1 is not equal to $string2
	echo '<br>';
	
	var_dump($string1 !== $string2); //	Returns true if $string1 is not identical to $string2
	echo '<br>';
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>