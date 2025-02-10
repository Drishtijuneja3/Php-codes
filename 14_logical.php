<?php
//code to demonstrate logical operators or to check whether an year is leap year or not
    $year = 2014;
    
    // Leap years are divisible by 400 or by 4 but not 100
    if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)))
    {
        echo "$year is a leap year.";
    }
    else
    {
        echo "$year is not a leap year.";
    }
echo "This program is written by Drishti";
?>
