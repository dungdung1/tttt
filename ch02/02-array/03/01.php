<?php

	

	$courses = array();
	$courses["php"] = "PHP";
	$courses["zend"] = "zend Framework";
	$courses["joomla"] = "Joomla";
	$courses[] = "Item 1";
	$courses[] = "Item 1";
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";			
	
	echo $courses["zend"];