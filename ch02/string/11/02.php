<?php
	$str = "php is eary\n\n\n ";
	
	echo "input :" .$str. "-length: " . strlen($str);
	
	$str = rtrim($str );
	
	echo "<br/>";
	 
	echo "output :".$str. "-length: " . strlen($str);