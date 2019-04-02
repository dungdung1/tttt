<?php 
	$timepost = '1/4/2019 9:16:20';
	$timeReply = '19/4/2019 11:16:26';
	
	$datepost = date_parse_from_format('d/m/Y H:i:s', $timepost);
	$dateReply = date_parse_from_format('d/m/Y H:i:s', $timeReply);
		
	$tspost   =  mktime($datepost['hour'],$datepost['minute'],$datepost['second'],$datepost['month'],$datepost['day'],$datepost['year']);
	$tsReply  =  mktime($dateReply['hour'],$dateReply['minute'],$dateReply['second'],$dateReply['month'],$dateReply['day'],$dateReply['year']);
	
	$distance = $tsReply - $tspost;
	
	switch ($distance){
		case ($distance < 60):
			$result = ($distance == 1)? $distance. 'seconds ago' :$distance. 'seconds ago' ;
			break;
		case ($distance >= 60 && $distance <3600 ):
			$minute = round($distance/60);			
			$result = ($minute == 1)? $minute. 'minute ago' :$minute. 'minute ago' ;
			break;
		case ($distance >= 3600 && $distance < 86400 ):
			$hour = round($distance/3600);		
			$result = ($hour == 1)? $hour. ' hour ago' :$hour. 'hour ago' ;
			break;	
		case (round($distance/86400) == 1 ):
			$result = 'yesterday at'.date ('H:i:s',$tsReply);
			break;
		default:
			$result =date ('d/m/Y a\t H:i:s',$tsReply);
			break;
	}
	echo $result;

?>