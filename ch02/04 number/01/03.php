<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Làm Tròn Số</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php 
	$number = 8.5;
?>
	<div class="conten1">
		<h1>Làm Tròn Số</h1>
		<ul class="funtion">
			<li><span>scource: </span><?php echo $number;?></li>
			<li><span>round: </span><?php echo round($number);?></li>
			<li><span>round: (n,2)</span><?php echo round($number,2);?></li>
			<li><span>round: (n,0)</span><?php echo round($number,0);?></li>
			<li><span>round(n,0,PHP_ROUND_HALF_UP)</span><?php echo round($number,0,PHP_ROUND_HALF_UP);?></li>
		</ul>
	</div>

</body>
</html>