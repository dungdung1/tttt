<?php
	$array = array(2,3,1);
	
	function checkNumber($number){
		$result = ($number % 2 == 0)? "ever" : "odd";
		return $result;
	}
	$newArr = array_map("checkNumber", $array);
	
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";