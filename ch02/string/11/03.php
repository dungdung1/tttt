<?php
	$str = "php is eary";
	
	echo "input :" .$str. "-length: " . strlen($str);
	
	$str = rtrim($str,"eary");
	
	echo "<br/>";
	 
	echo "output :".$str. "-length: " . strlen($str);