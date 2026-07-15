<?php
    $number1  =  10 ;
    $number2  =  20 ;
    $number3  =  30 ;
    $number4  =  40 ;

    $add =  $number1  +   $number2;
    $sub =  $number3  -   $number2;
    $mul =  $number1  *   $number4;
    $div =  $number4  /   $number2;
    $total =  $add  +  $sub  +   $mul +   $div;
    $ave =  ($add  +  $sub  +   $mul +   $div) / 4;
    

    echo  "<p>the  sum of  $number1 and  $number2  is  $add.</p> ";
    echo  "<p>the  difference  of  $number3  and  $number2 is $sub.</p>";
    echo  "<p>the  product of  $number1  and   $number4 is $mul.</p>";
    echo  "<p>the  division  of  $number4  and $number2  is    $div.</p>";
    echo  "<p>the  total   of  all result  is  $total.  </p>";
    echo  "<p>the  average of  all result  is  $ave.</p>"   
?>