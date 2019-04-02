<?php
	$str = "name=peter&age=12";
	parse_str($str);
	echo $name."<br/>";
	echo $age."<br/>";
?>