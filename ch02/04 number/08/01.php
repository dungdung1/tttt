<?php
	$tractions = "4/3";
	
	$arrFraction = explode("/", $tractions);
	$ts = $arrFraction[0];
	$ms = $arrFraction[1];
	
	function UCLN($n1,$n2){
		for($i = 1 ; $i <= $n1 ;$i++) if($n1 % $i ==0) $uclnN1[] =$i;
		for($i = 1 ; $i <= $n2 ;$i++)if($n2 % $i ==0) $uclnN2[] =$i;
		
		$temp = array_intersect($uclnN1, $uclnN2);
		echo "<pre>";
		print_r($uclnN1);
		echo "</pre>";
		
		echo "<pre>";
		print_r($uclnN2);
		echo "</pre>";
		
		echo "<pre>";
		print_r($temp);
		echo "</pre>";
		
	}
	UCLN(18,4);