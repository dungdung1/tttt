<?php
	//CACH 1
	$courses  = array();
	$courses[]  = "PHP";
	$courses[]  = "Zend Frameword";
	$courses[]  = "joomla";
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	 //CACH 2:
	$courses  = array();
	$courses[0]  = "PHP";
	$courses[1]  = "Zend Frameword";
	$courses[2]  = "joomla";
	
	//CACH 3:
	$courses  = array("PHP","Zend Frameword","joomla"); 
	
	echo $courses[0];
	