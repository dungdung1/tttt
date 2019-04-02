<?php
	$array = array(2,4,6);
	
	function myfuntion(&$value ,$key,$param = 2){
		$value = $value * $param;
	}
	array_walk($array, "myfuntion",3);
	
	echo "<pre>";
	print_r($array);
	echo "</pre>";