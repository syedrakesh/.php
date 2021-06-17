<?php
//  Class - Access Modifier - Normal Inheritance
//   With two same class - getKukurClass_dob_Property()
//  We can remove getKukurClass_dob_Property() function from kukur class but this script will work.
class Kukur
{
    protected $eyeColor = 'Brown';
    protected $dob = 'March 21, 2021';
    protected $kingdom = 'Animalia';
    protected $leg = 4;

    public function getKukurClass_dob_Property()
    {
        echo 'Public Function From Kukur Class: ';
        echo $this->dob;
        echo '<br>';
    }

    public function getKukurClass_EyeColor_Property()
    {
        echo 'Public Function From Kukur Class: ';
        echo $this->eyeColor;
        echo '<br>';
    }
}
class GermanShepherd extends Kukur
{
    public function getKukurClass_EyeColor_Property()   //  There are two same getKukurClass_EyeColor_Property() in this script. If I remove this function from here then it will call from Kukur Class.
    {
        echo 'Public Function From GermanShepherd Class: ';
        echo $this->eyeColor;
        echo '<br>';
    }
}

$gs_dog = new GermanShepherd();

$gs_dog->getKukurClass_EyeColor_Property();
$gs_dog->getKukurClass_dob_Property();
