<?php
	define('Joy', 'Syed Rakesh Uddin'); // case-sensitive
	echo Joy;
	echo '<br>';
	
	define('Joy', 'Syed Rakesh Uddin', true); // true parameter for case-insensitive
	echo JOY;
	echo '<br>';
	
	define('name',['Syed Rakesh Uddin', 'Syed Rahat Uddin', 'Syed Mazbah Uddin']); // Constant array
	echo name[2];
	echo '<br>';
	
	define('Rahat', 'Syed Rahat Uddin'); // case-sensitive
	function checkGlobal(){
		echo Rahat;
	}
	checkGlobal();
	echo '<br>';
?>