<?php
	$number = "02.000.000";
	
	$number = str_replace(',','', $number);
	
	if(is_numeric($number)){
		echo "number";
	}else {
		echo "not number";
	}