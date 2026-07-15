<?php

    $score = 90;
    $attendance = 80;

    if ($score >= 80) {

        if ($attendance >= 85) 
        {
            echo"Passed with honors";
        } else {
            echo"Passed but needed to improve attendance";
            
        }
    } 
    else {
        echo"Failed";
    }
    
?>