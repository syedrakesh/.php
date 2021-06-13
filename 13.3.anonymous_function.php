<?php
	$myAnonymousFunction = function() {
		return function() {
			echo 'Hello Sir!' . '<br>';
		};
	};
	$joy = $myAnonymousFunction();
	$joy();
?>