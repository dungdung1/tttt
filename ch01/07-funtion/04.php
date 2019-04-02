<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" style="text/css" href="style.css">
</head>
<body>
<div class="connec">
	<?php 
	function createBox($conten ,$width =150,$height = 50){
		$result = '<div style="width: '.$width.'px ; height: '.$height.'px;">';
		$result .= '<p>'.$conten.' <span>(300*100)</span></p>';
		$result .= '</div>';
		return $result;

	}	
	$boxA = createBox("box A ",500,70);
	$boxb = createBox("box b");
	echo $boxA .$boxb; 
	?>
	
</div>

</body>
</html>