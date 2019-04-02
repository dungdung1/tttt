<?php
	$course = array("pHp" => "PHP", "jo" => "johool" ,"zen" =>"zend Framework");
	
	$newArr =array_change_key_case($course, CASE_UPPER) ;
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";
	