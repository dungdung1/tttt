<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
<title>MÔ PHỎNG MÁY ATM</title>
<link type="text/css" href="style.css" rel="stylesheet" media="screen" >
</head>
<body>
	<div class="chimcu4">
		<?php 
			$monney = "";
			$five = "";
			if(isset($_POST["$monney"])) $monney = $_POST["$monney"];
		?>
		<div class="info">
			<img src="img/atmm.jpg"/>
		</div>
			<h1>MÔ PHỎNG MÁY ATM</h1>
			<form action="#" method="post">
				<p>xin nhập vào số tiền bạn cần rút</p>
				<input type="text" name = "monney" value="<?php echo $monney;?>"/>
				<input type="submit" name ="rút tiền." value="rút tiền"/>
			</form>
	</div>
	<div class="clr"></div>
	<div class="result">
		<div class="nomal">
			<p class="col1">mệnh giá</p>
			<p class="col2">số lương</p>
			<p class="col3">thành tiền</p>
		</div>
		<div class="clr"></div>
		<?php 
			define("ONE", 1000);
			define("TWO", 2000);
			define("FIVE", 5000);
			define("ONE_0", 10000);
			define("TWO_)", 20000);
			define("FIVE_0", 50000);
			define("ONE_00", 100000);
			define("TWO_00", 200000);
			define("FIVE_00",500000);
			
			$five00 = 0;
			if(is_numeric($monney) && monney > 100){
				while ($monney >= FIVE_00) {
					$five += 1;
					$monney = $monney -  FIVE_00;
				}
			}
			?>
			<?php 
			if($five00 >0){
			echo '<div class="nomal">
						<p class="col1">'. FIVE_00 .'</p>
  						<p class="col2">' . $five00 .'</p>
						<p class="col3">' . FIVE_00 * $five00 . '</p>
    				  </div>
				  <div class ="clr"></div>';
			?>	
			}	
		<?php 
		
		?>
		<div class="nomal">
			<p class="col1">200.000</p>
			<p class="col2">2</p>
			<p class="col3">400.000</p>
		</div>
		<div class="nomal">
			<p class="col1">100.000</p>
			<p class="col2">2</p>
			<p class="col3">400.000</p>
		</div>
	</div>
</body>	
</html>













