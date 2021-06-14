<?php
	echo "Today is " . date("Y/m/d") . "<br>";
	echo "Today is " . date("Y.m.d") . "<br>";
	echo "Today is " . date("Y-m-d") . "<br>";
	echo "Today is " . date("l");
	
	echo '<br>';
	
	echo "The time is " . date("h:i:sa") . ' Default date function';
	
	echo '<br>';
	
	date_default_timezone_set("Asia/Dhaka");
	echo "The time is " . date("h:i:sa") . ' Time with timezone';

	echo '<br>';
	
	$d=mktime(11, 14, 54, 8, 12, 2014);
	echo "Created date is " . date("Y-m-d h:i:sa", $d);
	
	echo '<br>';
	
	$d=strtotime("10:30pm April 15 2014");
	echo "Created date is " . date("Y-m-d h:i:sa", $d);
	
	echo '<br>';
	
	$d=strtotime("tomorrow");
	echo date("Y-m-d h:i:sa", $d) . "<br>";

	$d=strtotime("next Saturday");
	echo date("Y-m-d h:i:sa", $d) . "<br>";

	$d=strtotime("+3 Months");
	echo date("Y-m-d h:i:sa", $d) . "<br>";
	
	
	$d1=strtotime("March 11");
	$d2=ceil(($d1-time())/60/60/24);
	echo "There are " . $d2 ." days until 11th of March.";
	
	echo '<br>';
	
	$d1=strtotime("March 11 2022");
	$d2=ceil(($d1-time())/60/60/24);
	echo "There are " . $d2 ." days until 11th of March.";
	
	echo '<br>';
?>