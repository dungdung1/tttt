<?php
	$array = array("a","b","c","d","e");
	
	$newArr = array_slice($array, 2,2,true);
	$newArr = array_slice($array, 2,2,false);
	
	
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";