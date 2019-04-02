
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css"/>
<title>Tính năm nhuận</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="content3">
	  <h2>Tính năm nhuận</h2>
	  <?php 
	  	function testleapYear($year){
	  		$flag = false;
	  		if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) $flag = true;
	  		
	  	}
	  	$year = 2012;
	  	if(testleapYear($year)){
	  		echo "năm nhuận";
	  	}else {
	  		echo "năm không nhuận";
	  	}
	  ?>
	  
		
	</div>

</body>
</html>