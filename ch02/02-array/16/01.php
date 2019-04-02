<?php
	$course = array("php" => PHP , "time" => 80,90);
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	$result = serialize($course);
	echo $result;