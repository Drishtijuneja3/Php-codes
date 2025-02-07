<?php
//code to enter marks of 5 subjects using associative array and display total marks in percentage
$marks=array("English"=>75, "Science"=>90, "Maths"=>85, "History"=>80, "Computer"=>88);
$total_marks=array_sum(marks);
$total_subjects=count($marks);
$total_possible_marks=$total_subjects*100;
$percentage=($total_marks/$total_possible_marks)*100;
echo "Total marks: $total_marks <br>";
echo "Percentage: ".number_format($percentage,2)."% <br>";
echo "This program is written by Drishti";
?>
