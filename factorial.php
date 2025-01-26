<?php
//code to print factorial of a number using recursive function
function fact($n){
  if($n<=1){
    return 1;}
  else{
    return $n*fact($n-1);}
}
$n=5;
echo "Factorial of $n is: ".fact($n);
echo "This program is written by Drishti";
?>
