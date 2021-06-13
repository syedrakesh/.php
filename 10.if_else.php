<?php
	$age = 26;
	if ( $age >= 0 and $age <= 1 ) {
	  echo "You are a baby";
	}elseif ( $age >= 1.1 and $age <= 5 ){
		echo "You are a toddler";
	}elseif ( $age >= 5.1 and $age <= 13 ){
		echo "You are a child";
	}elseif ( $age >= 13.1 and $age <= 17.9 ){
		echo "You are a teenager";
	}elseif ( $age >= 18 and $age <= 25 ){
		echo "You are a young adult";
	}elseif ( $age >= 25.1 and $age <= 50 ){
		echo "You are an adult";
	}else {
		echo "You are an old";
	}
?>