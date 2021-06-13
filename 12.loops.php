<?php
$number1 = 0;

while($number1 <= 100) {
	echo "While loop : $number1 <br>";
	$number1+=10;
}



$number2 = 10;
do {
	echo "Do While loop : $number2 <br>";
	$number2++;
} while ($number2 <= 5);


for ($number3 = 0; $number3 < 10; $number3+=10) {
  echo "For loop : $number3 <br>";
}



$color1 = array( 'red', 'green', 'blue' );
foreach( $color1 as $value1 ){
	echo 'Foreach loop only value ' . $value1 . '<br>';
}


$age = array( 'Rakesh' => '26', 'Rahat' => '20', 'Shashi' => '23' );
foreach( $age as $key => $value2 ){
	echo 'Foreach loop key with value ' . $key . ' = ' . $value2 . '<br>';
}


for( $number4 = 0; $number4 < 5 ; $number4++ ){
	if( $number4 == 2 ){
		break;
	}
	echo 'Break ' . $number4 . '<br>';
}



for( $number5 = 0; $number5 < 5 ; $number5++ ){
	if( $number5 == 2 ){
		continue;
	}
	echo 'Continue ' . $number5 . '<br>';
}

?>