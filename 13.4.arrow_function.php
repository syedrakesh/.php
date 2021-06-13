<?php
	//	 Normal arrow function
	$arrowFunction1 = fn() => 'Hello World!<br>';
	echo $arrowFunction1();
	
	
	//	Arrow function with argument
	$arrowFunction2 = fn( $lastName ) => 'Hello, ' . $lastName;
	echo $arrowFunction2('Joy');
	
	echo '<br>';
	
	
	
	//	Arrow function with argument
	$number1 = 6;
	$arrowFunction3 = fn( $number2 ) => $number1 + $number2 ;
	echo $arrowFunction3( 4 );
?>