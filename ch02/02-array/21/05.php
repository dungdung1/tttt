<?php
	$array1 = array("name" => "PHP" ,"time" => 120 ,"zend","joomla");
	$array2 = array("PHP" , 100);
	
	$diff = array_intersect_key($array1, $array2);
	$diff = array_intersect_key($array2, $array1);

	
	echo "<pre>";
	print_r($array1);
	echo "</pre>";
	
	echo "<pre>";
	print_r($array2);
	echo "</pre>";
	
	echo "<pre>";
	print_r($diff);
	echo "</pre>";