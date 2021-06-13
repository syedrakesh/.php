<?php
    function staticKeywordChecker(){
        static $number = 0;
        //echo "$number <br>";

        $number++;
        echo "$number <br>";
    }

    staticKeywordChecker();
    staticKeywordChecker();
    staticKeywordChecker();
?>