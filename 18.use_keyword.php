<?php
	$laptopName = 'Asus';
	
	//	Using anonymous function
	
	$userDeviceInfo1 = function() use($laptopName) {
		echo "I'm using " . $laptopName . '<br>';
	};
	$userDeviceInfo1(); 
	
	
	
	
	
	
	
	//	Using normal user define function
	
	function userDeviceInfo2( $laptopName ) {
		echo "I'm using " . $laptopName . '<br>';
	};
	userDeviceInfo2( $laptopName );
?>