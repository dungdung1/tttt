<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>MÔ PHỎNG MÁY ĐIỆN TỬ</title>
<link type="text/css" href="style.css" rel="stylesheet" media="screen"/>
</head>
<body>
<?php 
		$n1    		="";
		$n2 		="";
		$cacutel    ="";
		$result = "";
	if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["cacutel"])){
		 $n1       = $_POST["number1"];
		 $n2       = $_POST["number2"];
		 $cacutel  = $_POST["cacutel"];
		 $flag  = true;
	if(is_numeric($n1) && is_numeric($n2) ){
				switch ($cacutel) {
			case "+":
				$result = $n1 + $n2;
				break;
		
			case "-":
				$result = $n1 - $n2;
				break;
			case "*":
				$result = $n1 * $n2;
				break;
			case "%":
				$result = $n1 % $n2;
				break;
			default:
				$result = $n1 - $n2;
				$cacutel ="-";
				break;
}
	}
	else {
		$result = "không thực hiện được kết quả";
		$flag = false;
	}
	}
?>
	<div class="content">
		<h1>MÔ PHỎNG MÁY ĐIỆN TỬ</h1>
		<form action="#" method="post" name ="main-form">
			<div class="row">
				<span>số thứ nhất</span>
				<input type="text" name = "number1" value="<?php echo $n1;?>"/>
			</div>
			
			<div class="row">
				<span>phép toán</span>
				<input type="text" name = "cacutel" value="<?php echo $cacutel;?>"/>
			</div>
			<div class="row">
				<span>số thứ hai</span>
				<input type="text" name = "number2" value="<?php echo $n2; ?>"/>
			</div>
			<div class="row">				
				<input type="submit" value = "xem kết quả" name =" submit"/>
			</div>
			
			<div class="row">				
				<p><?php 
					if($flag == true){
						echo $n1 . " " . $cacutel . " " . $n2 . " = " . $result;
					}
					else {
						echo $result;
					}
				?>
			</div>
		</form>
	</div>

</body>
</html>