<?php
//code to count number of digits in a given number
function counting($n){
  return strlen(abs($n));
}
$n=12345678;
echo "No. of digits in $n is: ".counting($n);
echo "This program is written by Drishti";
?>
