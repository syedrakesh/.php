<?php
	// Class - access modifier - function - array - type declaration
	class Dog {
		public $eye_color = "Brown";
		public $kingdom = "Animalia";
		public $phylum = "Mammalia";
		public $dob = "January 30, 2017";

		public function eyeBallColor(): string
		{
			return $this->eye_color;
		}
		public function sleep( int $energyLevel = 100 ) {
			return ( $energyLevel < 40 ) ? "I'm sleeping" : "I don't want to sleep" ;
		}
		public function allPropertyOfDog(): array
		{
			return [
				'eye_color' => $this->eye_color,
				'kingdom' => $this->kingdom,
				'phylum' => $this->phylum,
				'dob' => $this->dob
			];
		}
	}
	$dogLover = new Dog();
	echo $dogLover->eyeBallColor();
	echo '<br>';
	
	echo $dogLover->sleep( 10 );
	echo '<br>';
	
	var_dump($dogLover->allPropertyOfDog());
	echo '<br>';
	
	
	
	
	// Class - Access Modifier - Data Type - function - conditional statement - type declaration
	class Car {
		public string $color = 'Red';
		public bool $engineStatus = true;
		
		public function turnOn(): string
		{
			if ( $this->engineStatus ) {
				return 'Car is already on.';
			} else {
				$this->engineStatus = true;
				return 'Car is on.';
			}
		}
		
		public function turnOff(): string
		{
			if ( $this->engineStatus ) {
				return 'Press kill switch';
			} else {
				return  'Car is already turn off.';
			}
		}
		
		public function carColor(): string 
		{
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