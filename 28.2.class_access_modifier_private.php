<?php
	// Class - Access Modifier - Data Type - private property access
	//	Private property only can access from into the own class
	class Car {
		private string $color;
		private bool $engineStatus;
		private int $topSpeed;
		private int $year = 2021;
		private string $model = 'CB';
		
		public function getCarDetails1(){	//	Private property(private string $color;) access from public function
			echo $this->color = 'Red';
		}
		
		public function getCarDetails2(): array	//	Private property access from public function
		{
			return [
				"year" => $this->year,
				"model" => $this->model
			];
		}
	}
	$lamborghini = new Car();
	
	echo $lamborghini->getCarDetails1();	// Access private property using public function
	echo '<br>';
	
	var_dump($lamborghini->getCarDetails2());	// Access private property using public function
	echo '<br>';
?>