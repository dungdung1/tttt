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
	function createBox(){
		$value  = '<div style="width: 200px ; height: 50px;">';
		$value .= '<p>Box A <span>(300*100)</span></p>';
		$value .= '</div>';
		return $value;
	
	}	
	 $result =  createBox();
	 echo $result;
	
	?>
	
</div>

</body>
</html>