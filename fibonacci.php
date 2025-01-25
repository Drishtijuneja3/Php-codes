<?php
//code to print fibonacci series
$num=0;
$n1=0;
$n2=1;
echo "Fibonacci series: <br>";
echo $n1."<br>".$n2."<br>";
while ($num<10){
  $n3=$n2+$n1;
  echo $n3;
  echo "<br>";
  $n1=$n2;
  $n2=$n3;
  $num=$num+1;
}
echo "This program is written by Drishti";
?>
