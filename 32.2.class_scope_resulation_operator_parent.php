<?php
//  Class - Access Modifier - Constant - Scope Resulation - parent
class Animal
{
    const classNameProperty = 'Animal';

    public function classNameFunction()
    {
        echo 'Animal -> ' . Animal::classNameProperty;  //  Constant - Scope
    }
}
class Kukur extends Animal
{
    const classNameProperty = 'Kukur';

    public function classNameFunction()
    {
        echo 'Kukur -> ' . Kukur::classNameProperty;  //  Constant - Scope
        echo '<br>';
        return parent::classNameFunction();
    }
}


class GermanShepherd extends Kukur
{
    const classNameProperty = 'GermanShepherd';

    public function classNameFunction()
    {
        echo 'GermanShepherd -> ' . GermanShepherd::classNameProperty;  //  Constant - Scope
        echo '<br>';
        return parent::classNameFunction();
    }
}

$gs_dog = new GermanShepherd();
$gs_dog->classNameFunction();
