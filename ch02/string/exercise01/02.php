<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$arrNumber = array(
			0 => "không",
			1 => "một",
			2 => "hai",
			3 => "ba",
			4 => "bốn",
			5 => "năm",
			6 => "sáu",
			7 => "bảy",
			8 => "tám",
			9 => "chín",	
			);
	
	function readNumber3Digit($number , $dictionnaryNumber, $readFull = true){
		
		$number = 1260;
		
		$number  = strval($number);
		$number = str_pad($number, 12, 0,STR_PAD_LEFT);
		$arrNumbers = str_split($number,3);
		
		echo "<pre>";
		print_r($arrNumbers);
		echo "</pre>";
		
		echo "Input: " .$number . "<br/>";
		echo "Out: " . $number . "<br/>";
	}