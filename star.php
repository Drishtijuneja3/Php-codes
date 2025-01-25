<?php
//code to demonstrate star pattern
$stars=15;
for($i=0;$i<8;$i++){
  for($j=0;$j<$stars;$j++){
    echo "*";
  }
  echo "<br>";
  $stars-=2;
}
echo "This program is written by Drishti";
?>
