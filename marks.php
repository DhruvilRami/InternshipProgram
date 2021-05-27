<?php

$a = 85;
$b = 75;
$c = 84;
$d = 74;
$e = 83;
$total = NULL;
$average = NULL;
$percentage = NULL;

// Calculate total, average and percentage

$total = $a + $b + $c + $d + $e;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if($percentage>70){
	echo " <br>You Got First Class In this exam<br>";
}else if($percentage>60){
	echo "You got Second class in this exam";
}else if($percentage>50){
	echo "You got Third class in this exam";
}else if($percentage<40){
	echo "You are failed in this exam";
}
echo "<br>The Total marks=" . $total . "/500\n";
	echo "<br>The Average marks=" . $average . "\n";
	echo "<br>The Percentage=". $percentage . "%";


?>