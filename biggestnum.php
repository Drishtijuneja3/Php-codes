<?php
//code to find biggest number in an array without using any array function
$n=[1,2,3,4,5,6];
$num=$n[0];
for($i=1;$i<6;$i++){
	if($n[$i]>$num){
		$num=$n[$i];
	}
}
echo $num;
echo "This program is written by Drishti";
?>
