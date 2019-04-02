<?php

 	
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
 					"sex"  => 0,
 					"score" => array(7,8,9),
 			)
 	);
 	
 	echo "<pre>";
 	print_r($student);
 	echo "</pre>";
 	
 	echo ($student["sv001"]["name"])."<br/>";
 	echo ($student["sv003"]["score"][2])."<br/>";
 	
 	$student["sv003"]["name"] ="dung";
 	$student["sv003"]["score"][1] =2;

 	echo "<pre>";
 	print_r($student);
 	echo "</pre>";