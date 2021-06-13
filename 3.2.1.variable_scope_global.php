<?php
    $number = 5; // Global Scope

    function globalScopeChecker(){

        echo "Inside Funtion Output $number <br>"; //   No output here
    }
    
    globalScopeChecker();
    
    echo "Ouside Funtion Output $number <br>"; //   Output Here
?>