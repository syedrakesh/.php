<?php
// Class - Access Modifier - Data Type - Setter Getter
class Car
{
	private string $color;
	private bool $engineStatus;
	private int $topSpeed;
	private int $year = 2020;
	private string $model = 'CB';

	//	Setter Function
	public function getYear(): int
	{
		return $this->year;
	}

	//	Getter Function
	public function setYear(int $year): void
	{
		$this->year = $year;
	}
}
$lamborghini = new Car();

echo $lamborghini->setYear(2021);	//	Setter - set the value
echo $lamborghini->getYear();	//	Getter - Get the value
