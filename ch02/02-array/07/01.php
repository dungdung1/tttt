<?php
		$course = array("PHP", "joomla" ,"zend Framework", "jQuery" ,"PHP", "joomla");
		
		echo "<pre>";
		print_r($course);
		echo "</pre>";
		
		$newArr = array_unique($course);
		
		echo "<pre>";
		print_r($newArr);
		echo "</pre>";