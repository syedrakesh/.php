<?php
	// Class - access modifier
	/*
		Best practice : class serial
		1. Create class
		2. constant ( if any )
		3. property - variable ( if any )
		4. constructor ( if any )
		5. Getter - Setter ( if any )
		6. method - function ( if any )
		7. destructor ( if any )
	*/
	class Dog {
		public $eye_color = "Brown";
		public $dob = "January 30, 2017";
		public $does_shed = true;
		public $kingdom = "Animalia";
		public $phylum = "Mammalia";
		public $class = "Mammalia";
		public $order = "Carnivara";
		public $family = "Canidae";
		public $genus = "Canis";
		public $species = "Canis Lupus";
		public $subspecies = "Canis Lupus Familiaris";
		public $breed = "German Shepherd Dog";
		public $fur_color = "Black and Tan";
	}
	$dogLover = new Dog();
	echo $dogLover->breed;
	echo '<br>';
	
	$dogLover->breed = 'Husky';
	echo $dogLover->breed;
	echo '<br>';
	
	var_dump($dogLover);
	echo '<br>';
	var_dump($dogLover->breed);
	echo '<br>';
	
	
	// Class - Access Modifier - Data Type
	class Car {
		public string $color;
		public string $make;
		public string $model;
		public int $year;
		public int $fuel_type = 93;
		public int $hp;
		public int $tq;
		public string $transmission = "6 Speed Manual";
		public string $vehicle_type = "Coupe";
		public float $exterior_height;
		public float $exterior_width;
		public float $exterior_length;
		public string $exterior_um = "in";
		public float $weight;
		public string $weight_um = "lbs";
	}
	$lamborghini = new Car();
	$lamborghini->color = "Black";
	$lamborghini->model = "Lamborghini";
	echo 'I have a ' . $lamborghini->color . ' ' . $lamborghini->model;
	echo '<br>';
	
	var_dump($lamborghini);
	echo '<br>';
	var_dump($lamborghini->fuel_type);
	echo '<br>';
	
	
	
	
	
	
	
	
?>