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
		function ckeckNumber($value){
			echo $value ."</br>";		 
			if($value % 2 == 0){
				return true;
			}else {
				return false;
			}
		}		
		$result = ckeckNumber(11);
		if ($result == true){
			echo "so chan";
		}else {
			echo "so le";
		}
	
	?>
	
</div>

</body>
</html>