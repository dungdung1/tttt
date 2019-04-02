<?php
	$course = array("PHP", "joomla" ,"zend Framework","jQuery" );
	
	function removeItem(&$array ,$type ="fist" ,$total = 2){
		$resual = array();
		if (!empty($array)){
			if ($type == "first"){
				for($i = 1; $i <= $total ; $i++){
					$result[] = array_shift($array);
				}
				}else if ($type == "last") {
					for($i = 1; $i <= $total ; $i++){
					$result[] = array_pop($array);
				}
			}
		}
		
		 	return $resual;
}

	
	echo "srrTemp"."<br/>";
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	$arrTemp = removeItem ($course ,"last" ,2);
	
	echo "srrTemp"."<br/>";
	echo "<pre>";
	print_r($arrTemp);
	echo "</pre>";
	
	echo "course"."<br/>";
	echo "<pre>";
	print_r($course);
	echo "</pre>";