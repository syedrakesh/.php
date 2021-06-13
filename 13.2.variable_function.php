<?php
	$myVariableFunction1 = function() {
		return 'Hello World!' . '<br>';
	};
	echo $myVariableFunction1();
	
	
	
	
	$myVariableFunction2 = function( $greetings ) {
		return 'Hello, ' . $greetings . '<br>';
	};
	echo $myVariableFunction2( 'Joy' );
?>