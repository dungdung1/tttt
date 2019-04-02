<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insert title here</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php 
	$str = "php iS eary";
?>
	<div class="conten1">
		<h1>chuyển đổi chữ hoa , chư thường</h1>
		<ul class="funtion">
			<li><span>soure </span><?php echo $str?></li>
			<li><span>strtoupper </span><?php echo strtoupper($str)?></li>
			<li><span>strtolower </span><?php echo strtolower($str)?></li>
			<li><span>ucfirst </span><?php echo ucfirst($str)?></li>
			<li><span>lcfirst </span><?php echo lcfirst($str)?></li>
			<li><span>ucwords </span><?php echo ucwords($str)?></li>
			
		</ul>
	</div>

</body>
</html>