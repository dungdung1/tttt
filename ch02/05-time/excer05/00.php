<?php 
	$timepost = '1/4/2019 20:16:23';
	$timeReply = '1/4/2019 20:16:26';
	
	$datepost = date_parse_from_format('d/m/Y H:i:s', $timepost);
	$dateReply = date_parse_from_format('d/m/Y H:i:s', $timeReply);
	
	echo "<pre>";
	print_r($datepost);
	echo "</pre>";
	
	$tspost   =  mktime($datepost['hour'],$datepost['minute'],$datepost['second'],$datepost['month'],$datepost['day'],$datepost['year']);
	$tsReply  =  mktime($dateReply['hour'],$dateReply['minute'],$dateReply['second'],$dateReply['month'],$dateReply['day'],$dateReply['year']);
	
	echo $distance = $tsReply - $tspost;

?>