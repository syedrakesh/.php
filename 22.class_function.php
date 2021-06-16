<?php
	// Class - access modifier - function
	class Dog {
		const HAS_HEART = true;
		
		public $eye_color = "Brown";
		public $dob = "January 30, 2017";
		
		public function bark() {
			echo "I'm barking";
		}
		
		public function sleep( $energyLevel = 100 ) {
			echo ( $energyLevel < 40 ) ? "I'm sleeping" : "I don't want to sleep" ;
		}
	}
	$dogLover = new Dog();
	$dogLover->bark();
	echo '<br>';
	
	$dogLover->sleep();
	echo '<br>';
	
	$dogLover->sleep( 20 );
	echo '<br>';
	
	
	// Class - Access Modifier - Data Type - Function
	class Car {
		const HAS_WHEEL = 4;
		
		public string $color;
		
		public function turnOn() {
			echo "Car is turn on.";
		}
		
		public function turnOff( $engineStatus = false ) {
			echo ( $engineStatus ) ? "Press kill switch" : "Car is turn off" ;
		}
	}
	$lamborghini = new Car();
	$lamborghini->turnOn();
	echo '<br>';
	
	$lamborghini->turnOff();
	echo '<br>';
	
	$lamborghini->turnOff( true );
	echo '<br>';
	
	$lamborghini->turnOff( 1 );
	echo '<br>';
?>