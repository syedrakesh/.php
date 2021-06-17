<?php
	// Class - Access Modifier - Data Type - protected property access
	//	Protected property can access from other class using inheritance
	class Car {
		protected string $color;
		protected bool $engineStatus;
		protected int $topSpeed;
		protected int $year = 2021;
		protected string $model = 'CB';
		
		public function getCarDetails1(){	//	protected property(protected string $color;) access from public function
			echo $this->color = 'Red';
		}
		
		public function getCarDetails2(): array	//	protected property access from public function
		{
			return [
				"year" => $this->year,
				"model" => $this->model
			];
		}
	}
	$lamborghini = new Car();
	
	echo $lamborghini->getCarDetails1();	// Access protected property using public function
	echo '<br>';
	
	var_dump($lamborghini->getCarDetails2());	// Access protected property using public function
	echo '<br>';
?>