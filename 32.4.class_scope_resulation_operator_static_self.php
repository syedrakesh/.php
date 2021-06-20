<?php
//  Class - Access Modifier - Scope Resulation - self
class Animal
{
    public static $count = 1;

    public function __construct()
    {
        self::updateCount();
    }

    public static function updateCount()
    {
        echo self::$count++;
        echo '<br>';
    }
}

$Animal1 = new Animal();
$Animal2 = new Animal();
$Animal3 = new Animal();
