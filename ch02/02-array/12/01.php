<?php
	$course = array("php" => "PHP", "jo" => "johool" ,"zen" =>"zend Framework");
	
	$keyArray = array_rand($course,2);
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	unset($course[0],$course[2]);
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";