<?php
    function localScopeChecker(){
        $number = 5; // Local Scope
        
        echo "Inside Funtion Output $number <br>"; //   Output Here
    }

    localScopeChecker();

    echo "Ouside Funtion Output $number <br>"; //    No output
?>