<?php
	// Class - Access Modifier - Data Type - Public
	class Car {
		public string $color;
		public bool $engineStatus;
		public int $topSpeed;
		public int $year = 2021;
		public string $model = 'CB';
		
		public function getCarDetails(): array
		{
			return [
				"year" => $this->year,
				"model" => $this->model
			];
		}
	}
	$lamborghini = new Car();
	
	var_dump($lamborghini->getCarDetails());
	echo '<br>';
?>