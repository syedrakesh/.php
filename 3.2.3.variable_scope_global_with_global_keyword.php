<?php
    $number1 = 5; // Global Scope
    $number2 = 10; // Global Scope
    
    function globalScopeChecker(){
        global $number1, $number2, $output;
        $output = $number1 + $number2;

        echo "Inside Funtion Output $output <br>"; //   Output Here
    }

    globalScopeChecker();
    
    echo "Ouside Funtion Output $output <br>"; //   Output Here
?>