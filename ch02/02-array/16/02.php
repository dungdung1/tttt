<?php
	$result = 'a:3:{s:3:"php";s:3:"PHP";s:4:"time";i:80;i:0;i:90;}';
	
	$array = unserialize($result);
	
	echo "<pre>";
	print_r($array);
	echo "</pre>";