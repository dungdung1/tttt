<?php
	$url = "https://www.google.com/search?q=album+nhac+tre&oq=a+bum+nha&aqs=chrome.2.69i57j0l7.4711j0j7&sourceid=chrome&ie=UTF-8";
	//cách 1
	function getInfo01($url){
		
		
		$info = explode('/', $url);
		$result =$info[count($info)-1];
		echo $result;
	}
	
	//cách2
	function getInfo02($url){
		$arrayURL =parse_url($url);
		$info = explode('/', $arrayURL['path']);
		return $result = $info[count($info)-1];
	}
	//cách 3
	
	function getInfo03($url){
		$index = strripos($url, '/');
		$result = substr($url, $index +1);
		return $result;
	}
	getInfo03($url);


