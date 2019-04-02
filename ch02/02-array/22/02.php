<?php
	$array = array("name" => "PHP" ,"time" => 120 ,"zend","joomla");
	
	function myfuntion($value ,$key){
		echo $key . " " . $value . "<br/>";
	}
	array_walk($array, "myfuntion");