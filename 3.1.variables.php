<?php
    //  Variables are "containers" for storing information.
    /*
    Rules for PHP variables:

    A variable starts with the $ sign, followed by the name of the variable
    A variable name must start with a letter or the underscore character
    A variable name cannot start with a number
    A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    Variable names are case-sensitive ($age and $AGE are two different variables)
    */
    $firstName = "Syed";
    $middleName = "Rakesh";
    $lastName = "Uddin";

    echo "My name is $firstName$middleName$lastName <br>";
    echo "My name is $firstName $middleName $lastName <br>";

    $number1 = "5";
    $number2 = '5';
    echo $number1 + $number2;
?>