<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
<title>Image gallery</title>
<link type="text/css" href="style.css" rel="stylesheet" media="screen" >
</head>
<body>

</body>
	<div class="chimcu3">
		<h1>Image gallery</h1>
		<div class="imga">
			<?php 
				$i = 1;
				do{
					echo '<img alt="img" src="img/ll-0'. $i .'.jpg">';
					$flagShow = 0;
					if(isset($_GET["Show"])){
						$flagShow = $_GET["Show"];
						$i++;
					}
				
				}
				while ($i <= 3 && $flagShow == 1);
			?>
			<a href="08.php?Show =1">Show all</a>
			<a href="08.php?Show =0">Show demo</a>
		</div>
			
	</div>
</html>