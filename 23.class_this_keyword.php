<?php
	// Class - access modifier - function - array - this keyword
	class Dog {
		public $eye_color = "Brown";
		public $kingdom = "Animalia";
		public $phylum = "Mammalia";
		public $dob = "January 30, 2017";

		public function eyeBallColor() {
			echo $this->eye_color;
		}
		
		public function allPropertyOfDog() {
			return [
				'eye_color' => $this->eye_color,
				'kingdom' => $this->kingdom,
				'phylum' => $this->phylum,
				'dob' => $this->dob
			];
		}
	}
	$dogLover = new Dog();
	$dogLover->eyeBallColor();
	echo '<br>';
	
	var_dump($dogLover->allPropertyOfDog());
	echo '<br>';
	
	
	// Class - Access Modifier - Data Type - function - conditional statement - this keyword
	class Car {
		public string $color = 'Red';
		public bool $engineStatus = true;
		
		public function turnOn() {
			if ( $this->engineStatus ) {
				return 'Car is already on.';
			} else {
				$this->engineStatus = true;
				return 'Car is on.';
			}
		}
		
		public function turnOff() {
			if ( $this->engineStatus ) {
				return 'Press kill switch';
			} else {
				return  'Car is already turn off.';
			}
		}
		
		public function carColor() {
			return $this->color;
		}
	}
	$lamborghini = new Car();
	echo $lamborghini->carColor();
	echo '<br>';
	
	echo $lamborghini->turnOn();
	echo '<br>';
	
	echo $lamborghini->turnOff();
	echo '<br>';
?>