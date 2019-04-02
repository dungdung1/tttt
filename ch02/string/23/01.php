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
			8 => " tám",
			9 => "chín",
			);
	$number = 999;
	
	echo "Input: " . $number ."<br />";
	if (is_int($number)){
		if ($number >= 100 && $number <= 999){
			
		    $digit_0  = substr($number, 2, 1);
		    $digit_00  = substr($number, 1, 1);		    
		    $digit_000  = substr($number, 0, 1);
		    
		    $str_000 = $arrNumber[$digit_000]." trăm ";
		    
		    $str_00 = $arrNumber[$digit_00]." mươi ";
		    if($digit_00 == 0)$str_00 = " linh ";
		    if($digit_00 == 1)$str_00 = " mười ";
		    
		    $str_0 = $arrNumber[$digit_0];
		    if($digit_00 > 1 &&$digit_0 == 1)$str_0 = " mốt ";
		    if($digit_00 > 0 &&$digit_0 == 5)$str_0 = " lắm ";
		    if($digit_00 ==0 && $digit_0 ==0){
		    	$str_0 ="";
				$str_00 ="";
		    	

		    }
			$result = $str_000 . $str_00 . $str_0;
		}else {
		  	$result ="giá trị nhập vào tài khoản có ba chỉ số";
		}
		}else {
			$result = "giá trị nhập vào là số";
			
		}
		echo $result;
		
