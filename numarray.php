<?php
//code to demonstrate numeric array
$numbers=array(1,2,3,4,5);
for each($numbers as $value)
  { echo "Value is $value <br>";
  }
$numbers[0]="one";
$numbers[1]="two";
$numbers[2]="three";
$numbers[3]="four";
$numbers[4]="five";
for each($numbers as $value)
  { echo "Value is $value <br>"; }
echo "This program is written by Drishti";
?>
