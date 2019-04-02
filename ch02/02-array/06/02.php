<?php
	$course = array("PHP", "joomla" ,"zend Framework","jQuery" );
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	echo $firstItem = array_shift($course);

	echo "<pre>";
	print_r($course);
	echo "</pre>";