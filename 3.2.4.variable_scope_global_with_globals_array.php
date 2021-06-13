<?php
    $number1 = 5;
    $number2 = 10;
    
    function globalsArray(){
        echo "Inside Function Output";
        echo $GLOBALS['output'] = $GLOBALS['number1'] +$GLOBALS['number1'];
        echo "<br>";
    }

    globalsArray();

    echo "Ouside Funtion Output $output";
?>