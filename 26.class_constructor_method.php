<?php
	// Class - access modifier - function - constructor
	class Dog {
		public $eye_color;
		public $kingdom;
		public $phylum;
		public $dob;
		
		public function __construct( string $eye_color, string $kingdom, string $phylum, string $dob ) {
			$this->eye_color = $eye_color;
			$this->kingdom = $kingdom;
			$this->phylum = $phylum;
			$this->dob = $dob;
		}

		public function eyeBallColor(): string
		{
			return $this->eye_color;
		}
	}
	$dogLover = new Dog( "Brown", "Animalia", "Mammalia", "January 30, 2017" );
	echo $dogLover->eye_color;
	echo '<br>';
	
	echo $dogLover->eyeBallColor();
	echo '<br>';
	
	
	
	
	
	// Class - Access Modifier - Data Type - type declaration - constructor
	class Car {
		public string $color;
		public bool $engineStatus;
		public int $topSpeed;
		public int $year;
		public string $model;
		
		public function __construct( string $color, bool $engineStatus = true, int $topSpeed = 350, int $year, string $model ) {
			$this->color = $color;
			$this->engineStatus = $engineStatus;
			$this->topSpeed = $topSpeed;
			$this->year = $year;
			$this->model = $model;
		}
		
		public function getCarDetails(): array
		{
			return [
				"year" => $this->year,
				"model" => $this->model
			];
		}
	}
	$lamborghini = new Car( 'Red', false, 250, 2021, 'Hornet' );
	echo $lamborghini->color;
	echo '<br>';
		
	echo $lamborghini->engineStatus;
	echo '<br>';
	
	echo $lamborghini->topSpeed;
	echo '<br>';
	
	var_dump($lamborghini->getCarDetails());
?>