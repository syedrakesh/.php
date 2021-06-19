<?php
//  Class - Access Modifier - Overriding
class Animal
{
    protected $classNameProperty = 'Animal';

    public function classNameFunction()
    {
        echo 'Animal -> ' . $this->classNameProperty;
    }
}
class Kukur extends Animal
{
    //protected $classNameProperty = 'Kukur';

    public function classNameFunction() // This function is orverriding Animal class function
    {
        echo 'Kukur => ' . $this->classNameProperty;
    }
}
class GermanShepherd extends Kukur
{
    //protected $classNameProperty = 'GermanShepherd';

    public function classNameFunction() // This function is orverriding Kukur class function
    {
        echo 'GermanShepherd => ' . $this->classNameProperty;
    }
}

$gs_dog = new GermanShepherd();

$gs_dog->classNameFunction();
