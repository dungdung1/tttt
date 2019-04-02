<?php
	$course = array("PHP", "johool" ,"zend" ,"jQue");
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	echo "current: " .current($course)."<br/>";//php: ban đầu
	echo "current: " .next($course)."<br/>";//johool:tiến lên 
	echo "current: " .next($course)."<br/>";//zend..
	echo "current: " .prev($course)."<br/>";///johool:lùi về
	echo "current: " .reset($course)."<br/>";///johool:quay về ban đầu
	echo "current: " .end($course)."<br/>"; //cuối cùng