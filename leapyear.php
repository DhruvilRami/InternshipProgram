<?php
	$year=2021;
	if($year%4==0 and $year%100!=0 or $year%400==0){
		echo "This is Leap Year";
	}
	else{
		echo "This is not Leap Year";
	}
?>