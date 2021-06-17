<?php
	// Class - access modifier - function - destructor
	class Dog {
		public $eye_color;
		public $kingdom;
		public $phylum;
		public $dob;
		
	//	1st execute constructor
		public function __construct( string $eye_color, string $kingdom, string $phylum, string $dob ) {
			$this->eye_color = $eye_color;
			$this->kingdom = $kingdom;
			$this->phylum = $phylum;
			$this->dob = $dob;
		}
		
	//	2nd execute normal functions
		public function eyeBallColor(): string
		{
			return $this->eye_color;
		}
		
	//	at the end of the script execute destructor
		public function __destruct() {
			var_dump(
				[
					"eye_color" => $this->eye_color,
					"kingdom" => $this->kingdom,
					"phylum" => $this->phylum,
					"dob" => $this->dob,
				]
			);
		}
	}
	$dogLover = new Dog( "Brown", "Animalia", "Mammalia", "January 30, 2017" );
	echo $dogLover->eye_color;
	echo '<br>';
	
	echo $dogLover->eyeBallColor();
	echo '<br>';
	
	
	
	
	
	// Class - Access Modifier - Data Type - type declaration - destructor
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
						
			echo 'Connection established.';
			echo '<br>';
		}
		
		public function getCarDetails(): array
		{
			return [
				"year" => $this->year,
				"model" => $this->model
			];
		}
		
		public function __destruct(){
			echo 'Connection closed.';
			echo '<br>';
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
	echo '<br>';
?>