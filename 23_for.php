<?php
//code to demonstrate for loop
    /* example 1 */
    
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i;
    	echo "<br>";
    }
    
    /* example 2 */
    
    for ($i = 1; ; $i++)
    {
        if ($i > 10)
        {
            break;
        }
        echo $i;
    	echo "<br>";
    }
echo "This program is written by Drishti";
?>
