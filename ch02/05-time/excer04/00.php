
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
	  	$month = 3;
	  	$year = 2018;
	  	
	  	$timeStampe = mktime(0,0,0,$month,1,$year);
	  	echo $totalDays = date('t',$timeStampe);
	  ?>
	  
		
	</div>

</body>
</html>