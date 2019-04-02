<?php
	$str = "php is eary      ";
	
	echo "input :" .$str. "-length: " . strlen($str);
	
	$str = rtrim($str );
	
	echo "<br/>";
	 
	echo "output :".$str. "-length: " . strlen($str);