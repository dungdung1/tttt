<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Trích xuất nội dung</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php 
	$str = "php iS eary";
?>
	<div class="conten1">
		<h1>Trích xuất nội dung</h1>
		<ul class="funtion">
			<li><span>soure: </span><?php echo $str?></li>
			<li><span>lấy 3 chữ đầu: </span><?php echo substr($str, 0,3)?></li>
			

		</ul>
	</div>

</body>
</html>