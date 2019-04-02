<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>xác địh vị trí</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php 
	$str = "Hello php iS eary,php iS eary";
?>
	<div class="conten1">
		<h1>xác địh vị trí</h1>
		<ul class="funtion">
			<li><span>soure </span><?php echo $str?></li>
			<li><span>substr(2)</span><?php echo substr($str,2)?></li>
			<li><span>substr(2,5)</span><?php echo substr($str,2,5)?></li>
			<li><span>substr(0,5)</span><?php echo substr($str,0,5)?></li>
			<li><span>substr(-1)</span><?php echo substr($str,-1)?></li>
			
		</ul>
	</div>

</body>
</html>