<?php
	$array = array("a","b","c","d","e");
	
	
	
	
	echo "input :";
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	
	$newArr = array_splice($array, 2,1);
	
	
	echo "newArr";
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";
	
	echo "output :";
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";