<?php
//  Class - Access Modifier - Scope Resulation - self
class Animal
{
    public static $count = 1;

    public function __construct()
    {
        self::updateCount1();
    }

    public static function updateCount1()
    {
        echo self::$count++;
        echo '<br>';
    }
}

$Animal1 = new Animal();

Animal::updateCount1();
