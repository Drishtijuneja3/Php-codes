<?php
//code to demonstrate pass by reference
function selfMultiply(&$number){
  $number*=$number;
  return $number;
}
$mynum=5;
echo $mynum;
echo "<br>";
selfMultiply($mynum);
echo $mynum;
echo "This program is written by Drishti";
?>
