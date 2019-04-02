<?php
	$score = array(2,3,4,5,3,8,7,8);
	
	$sum = array_sum($score);
	$length = count($score);
	$max = max($score);
	$min = min($score);
	
	echo "<pre>";
	print_r($score);
	echo "</pre>";
	
	echo "trung binh: " .$sum/$length. "<br/>";
	echo  "tong: " .$sum."<br />";
	echo "max: " .$max."</br>";
	echo "min: " .$min."</br>";
			