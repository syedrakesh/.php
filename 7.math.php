<?php
	echo pi();
	echo '<br>';
	
	echo(min(0, 150, 30, 20, -8, -200));  // returns -200
	echo '<br>';
	
	echo(max(0, 150, 30, 20, -8, -200));  // returns 150
	echo '<br>';
	
	echo(abs(-6.7));  // returns 6.7
	echo '<br>';
	
	echo(sqrt(64));  // returns 8
	echo '<br>';
	
	echo(round(0.60));  // returns 1
	echo '<br>';
	
	echo(round(0.49));  // returns 0
	echo '<br>';
	
	echo rand(); // genarate random number
	echo '<br>';
	
	echo getrandmax(); // returns maximum number
	echo '<br>';
	
	echo M_PI_2; // Returns Pi/2
	echo '<br>';
?>