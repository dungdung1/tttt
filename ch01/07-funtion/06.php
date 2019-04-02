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
		$value ="ABC";
		function  createBox($conten, $width = 150 , $heigth = 50){
		$result = '<div style="width: "width: '.$width.'px; heigth: '.$heigth.'px;>';
		$result .= '<p>.$content .<span>(200x50)</span></p>';
		$result .= '</div>';
		//global  $value;
		//echo $value;
		echo $GLOBALS["value"];
		return $result;	
		}
		$boxA = createBox("Box A");
	
	
	?>

	
</div>

</body>
</html>
