<?php
//  Class - Access Modifier - Constant - Scope Resulation
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
    }
}


class GermanShepherd extends Kukur
{
    const classNameProperty = 'GermanShepherd';

    public function classNameFunction()
    {
        echo 'GermanShepherd -> ' . GermanShepherd::classNameProperty;  //  Constant - Scope
    }
}

$gs_dog = new GermanShepherd();
$gs_dog->classNameFunction();
echo '<br>';

echo $gs_dog::classNameProperty;  //  Constant - Scope
echo '<br>';
