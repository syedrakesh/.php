<?php
	// Class - access modifier - constant
	class Dog {
		const HAS_HEART = true;
		
		public $eye_color = "Brown";
		public $dob = "January 30, 2017";
	}
	$dogLover = new Dog();
	echo DOG::HAS_HEART;
	echo '<br>';
	
	echo((DOg::HAS_HEART)? 'Dog has heart' : 'Not a dog' );
	echo '<br>';
	
	
	// Class - Access Modifier - Data Type - constant
	class Car {
		const HAS_WHEEL = 4;
		
		public string $color;
	}
	$lamborghini = new Car();
	echo Car::HAS_WHEEL;
	echo '<br>';

	echo 'It is ' . ((Car::HAS_WHEEL)? 'a car' : 'not a car' );
	echo '<br>';
?>