<?php

	$courses  = array();
	//$courses[]  = "PHP";
	//$courses[]  = "Zend Frameword";
	//$courses[]  = "joomla";
	 
	
	
	$length = count($courses);
	echo $length;
	//CACH 1 
	
	
	//if($length > 0){
		//echo " khong la mang rong";
	//}else {
		//echo " mang rong";
	//}
	//CACH 2
	if(!empty($courses)){
		echo " khong la mang rong";
	}else {
		echo " mang rong";
	}