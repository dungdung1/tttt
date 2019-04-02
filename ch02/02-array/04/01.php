<?php
	$student = array();
 	$student["sv001"] = array("name" => "Shom" ,"sex" => 1 ,"score" => array(4,5,6));
 	$student["sv002"] = array("name" => "peter" ,"sex" => 1 ,"score" => array(5,6,7));
 	$student["sv003"] = array("name" => "Marry" ,"sex" => 1 ,"score" => array(7,8,9));
 	
 	$student = array(
 			"sv001" => array("name" => "Shom",
 						"sex"  => 1,
 						"score" => array(4,5,6),
 							),
 			"sv002" => array("name" => "Shom",
	 					"sex"  => 1,
	 					"score" => array(5,6,7),
 							),
 			"sv003" => array("name" => "Shom",
	 					"sex"  => 1,
	 					"score" => array(7,8,9),
 							)
 					);
 	
 	echo "<pre>";
 	print_r($student);
 	echo "</pre>";
