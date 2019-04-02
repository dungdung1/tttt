<?php
	$str = "php is eary";
	
	echo "input :" .$str. "-length: " . strlen($str);
	
	$str = ltrim($str ,"php");
	
	echo "<br/>";
	 
	echo "output :".$str. "-length: " . strlen($str);