<?php
		$course = array("PHP", "joomla" ,"zend Framework", "jQuery" ,"PHP", "joomla");
		
		echo "<pre>";
		print_r($course);
		echo "</pre>";
		
		unset($course[0],$course[2]);
		
		echo "<pre>";
		print_r($course);
		echo "</pre>";