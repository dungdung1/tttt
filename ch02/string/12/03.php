<?php
	$str = "  php   is    eary  ";
	
	$str = trim($str);
	
	$array = explode(" ", $str);
	
	
	foreach ($array as $key => $value){
		if (trim($value) == null )unset($array[$key]);
	}
	$str = implode(" ", $array);
	echo $str ."<br/>".'length: '. strlen($str);