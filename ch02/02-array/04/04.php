<?php

 	
 	$student = array(
 			"sv001" => array("name" => "Shom",
 					"sex"  => 1,
 					"score" => array(4,5,6),
 			),
 			"sv002" => array("name" => "bet",
 					"sex"  => 1,
 					"score" => array(5,6,7),
 			),
 			"sv003" => array("name" => "dung",
 					"sex"  => 0,
 					"score" => array(7,8,9),
 			)
 	);
 	$score = array(7,5,3,6);
 	
 	if(!empty($student)){
 		foreach ($student as $key => $value){
 			$name =$value["name"];
 			$sex = ($value["sex"]=1) ? "boy" :"girl";
 			$score = $value["score"];
 		
 	
 	$total = 0;
 	for ($i = 0 ; $i < count($score);$i++){
 		$total += $score[$i];
 		
 	}
 		echo "name :" . $name . "-sex :" . $sex ."-score :" . $total . "<br />";
 	}
 	}

 	
 	
 	
 	
 	
 	
 	
 	
 	
 	