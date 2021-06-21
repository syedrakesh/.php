<?php
//  Class - Access Modifier - Delete object using unset()
class Person
{
    public string $firstName = 'Syed Rakesh';
}

$joy = new Person();
echo $joy->firstName;

unset($joy);

echo $joy->firstName;
