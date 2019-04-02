<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Hình ảnh ngẩu nhiên</title>

<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
	function refreshPase(){
		Window.location.reload();
		}
</script>
</head>
<body>
	<div class="conten2">
		<h1>Hình ảnh ngẩu nhiên</h1>
		<div class="images">
		<?php 
			$number = rand(1, 5);
			echo '<img alt="images" src="images/hinh-0'.$number.'.jpg"/>';
		?>
			<a href="javascript:refreshPase();">ramdoom</a>
			
		</div>
	</div>

</body>
</html>