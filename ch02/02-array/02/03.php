<?php

	

	$courses  = array("PHP","Zend Frameword","joomla"); 
	echo "<pre>";
		print_r($GLOBALS);
		echo "</pre>";
	
	if(!empty($courses)){
		foreach ($courses as $key => $value){
			echo "$key"."<br/>";
			echo "$value";
	}
	}