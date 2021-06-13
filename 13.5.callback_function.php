<?php
	//	 Normal callback function
	function userName() {
		echo 'Syed Rakesh Uddin';
	}
	function greetings( $designation, $firstName ) {
		echo $designation;
		call_user_func( $firstName );
	}
	greetings( 'Engineer, ', 'userName');
	echo '<br>';
	
	
	
	
	
	
	
	
	
	
	
	//	Callback function with argument & call_user_func
	function userName1( $uName1 ) {
		echo $uName1;
	}
	function greetings1( $designation1, $functionName1, $functionArgument1 ) {
		echo $designation1;
		call_user_func( $functionName1, $functionArgument1 );
	}
	greetings1( 'Gamer, ', 'userName1', 'Syed Rahat Uddin' );
	echo '<br>';
	
	
	
	
	
	
	
	
	
	
	//	Callback function with argument
	function userName2( $uName2 ) {
		echo $uName2;
	}
	function greetings2( $designation2, $functionName2, $functionArgument2 ) {
		echo $designation2;
		$functionName2( $functionArgument2 );
	}
	greetings2( 'Teacher, ', 'userName2', 'Faria Nishat Khan' );
	echo '<br>';
	
	
	
	
	
	
	
	
	
	
	
	//	Callback function with argument - Passing Full function 1
	function greetings3( $designation3, $functionName3, $functionArgument3 ) {
		echo $designation3;
		$functionName3( $functionArgument3 );
	}
	greetings3( 'Teacher, ', function( $functionArgument4 ) { echo $functionArgument4; }, 'Khan Shashi' );
	echo '<br>';
	
	
	
	
	
	
	
	
	
	
	
	//	Callback function with argument - Passing Full Function 2
	function greetings4( $designation4, $functionName4, $functionArgument4 ) {
		echo $designation4;
		echo $functionName4( $functionArgument4 );
	}
	greetings4( 'Teacher, ', function( $functionArgument5 ) { return $functionArgument5; }, 'Nishat Shashi' );
	echo '<br>';
	
	
	
	
	
	
	
	
	
	
	
	
	
	//	Callback function with argument - Passing Full Arrow Function
	function greetings5( $designation5, $functionName5, $functionArgument5 ) {
		echo $designation5;
		echo $functionName5( $functionArgument5 );
	}
	greetings4( 'Teacher, ', fn( $functionArgument6 ) => $functionArgument6, 'Shashi Shashi' );
	
	
	
	
?>