<?php
//code to find whether a number is armstrong or not
$num=144;
$total=0;
$x=$num;
while($x!=0){
  $rem=$x%10;
  $total=$total+$rem*$rem*$rem;
  $x=$x/10;}
if($num==$total){
  echo "$num is an armstrong number";}
else{
  echo "$num is not an armstrong number";}
echo "This program is written by Drishti";
?>
