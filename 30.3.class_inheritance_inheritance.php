<?php
//  Class - Access Modifier - Inheritance Inheritance
//  Root Class or Parent class is mainly Animal Class. Chuild or sub class are: Kukur Class, GermanShepherd Class
//  GermanShepherd extends Kukur Class
//  Kukur extends Animal Class
//  But also Kukur class is root for GermanShepherd Class
//  Kukur class is also child class for animal class
class Animal
{
    protected $eyeColor = 'brown';
}
class Kukur extends Animal
{
    protected $leg = 4;
}
class GermanShepherd extends Kukur
{
    public function dogDetails()
    {
        echo 'This dog has ';
        echo $this->eyeColor;
        echo ' eye (Animal) & ';
        echo $this->leg;
        echo ' legs (Kukur)';
        echo '<br>';
        echo 'And this is proint from (GermanShepherd)';
    }
}

$gs_dog = new GermanShepherd();

$gs_dog->dogDetails();
