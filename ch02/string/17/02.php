<?php
	$str = "name=peter&age=12";
	parse_str($str,$arr);
	
	echo "<pre>";
	print_r($arr);
	echo "<pre/>";
?>