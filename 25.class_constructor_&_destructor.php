<?php
	// Class - Access Modifier - Data Type - type declaration - Constructor & Destructor
	echo 'Script Start';
	echo '<br>';
	
	class Car {
		public string $color;
		public bool $engineStatus;
		public int $topSpeed;
		public int $year = 2021;
		public string $model = 'CB';
		
		public function __construct()
		{
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
		
		public function __destruct()
		{
			echo 'Connection closed.';
			echo '<br>';
		}
	}
	$lamborghini = new Car();
	
	echo '<br>';
	var_dump($lamborghini->getCarDetails());
	echo '<br>';
	
	echo 'Script End';
	echo '<br>';
?>