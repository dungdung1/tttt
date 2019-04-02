<?php
	$score = array(2,3,4,5,3,8,7,8);
	
	$newArr = array_count_values($score);
	
	echo "<pre>";
	print_r($score);
	echo "</pre>";
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";
	
	
			