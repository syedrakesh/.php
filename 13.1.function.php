<?php
	//	 Userdefine function
	function writeMessage() {
		echo 'Hello World!'. '<br>';
	}
	writeMessage();
	
	
	//	Function Arguments - Single
	function greetings($fname) {
		echo 'Hello '. $fname;
	}
	greetings('Joy'. '<br>');
	
	
	//	Function Arguments - Multiple
	function nameWithYear($fname, $year) {
		echo 'Hi, '. $fname. ' is' . $year . ' years old' . '<br>';
	}
	nameWithYear('Joy', '26');
	
	
	//	
	function addingTwoNumber1( $number1, $number2 ) {
		return $number1 + $number2 . '<br>';
	}
	echo addingTwoNumber1(1, 26);
	
	
	//	
	function addingTwoNumber2( $number3, $number4 ) {
		return $number3 + $number4 . '<br>';
	}
	echo addingTwoNumber2('1', '26');
	
	
	//	
	function addingTwoNumber3( int $number5, int $number6) {
		return $number5 + $number6 . '<br>';
	}
	echo addingTwoNumber3(1, '26 day');
	
	
	
	function setHeight(int $minheight = 50) {
		echo "The height is : $minheight <br>";
	}
	setHeight(350);
	setHeight(); // will use the default value of 50
	setHeight(135);
	setHeight(80);


	function sum(int $number7, int $number8) {
		$number9 = $number7 + $number8;
		return $number9;
	}

	echo "5 + 10 = " . sum(5, 10) . "<br>";
	echo "7 + 13 = " . sum(7, 13) . "<br>";
?>