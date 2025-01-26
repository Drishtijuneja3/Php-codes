<?php
//code to check whether a given number is armstrong or not using a function
function arm($num){
$total=0;
$x=$num;
while($x!=0){
  $rem=$x%10;
  $total=$total+$rem*$rem*$rem;
  $x=$x/10;}
return $num==$total;}
$num=153;
if(arm($num)){
  echo "$num is an armstrong number";}
else{
  echo "$num is not an armstrong number";}
    echo "<br>";
echo "This code is written by Drishti";
?>
