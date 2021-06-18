<?php
//  Class - Access Modifier - Call protected function using public function with inheitance
class Kukur
{
    protected $eyeColor = 'Brown';
    protected $dob = 'March 21, 2021';
    protected $kingdom = 'Animalia';
    protected $leg = 4;

    protected function getKukurClass_dob_Property()
    {
        echo $this->dob;
    }
}
class GermanShepherd extends Kukur
{
    public function getKukurClassProperty()
    {
        echo 'His Birthday on: ';
        echo $this->getKukurClass_dob_Property();
    }
}

$gs_dog = new GermanShepherd();

$gs_dog->getKukurClassProperty();
