<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>lấy chòm sao</title>
<link type="text/css" href="style.css" rel="stylesheet" media="screen"/>
</head>
<body>
<?php 
		$day = "";
		$mon = "";
		
		$image ="";
		$name ="";
		$time ="";
		if(isset($_POST["day"]) && isset($_POST["month"])){
			$day = $_POST["day"];
			$mon = $_POST["month"];
			
			if(is_numeric($day) && is_numeric($day)){
			
				/*
				 	Capricornus - Ma Kết (22/12-19/1)
					Aquarius - Bảo Bình (20/1-18/2)
					Pisces - Song Ngư (19/2-20/3)
					Aries - Bạch Dương (21/3-19/4)
					Taurus - Kim Ngưu (20/4-20/5)
					Gemini - Song Tử (21/5-21/6)
					Cancer - Cự Giải (22/6-22/7)
					Leo - Sư tử (23/7-22/8)
					Virgo - Xử Nữ (23/8-22/9)
					Libra - Thiên Bình (23/9-23/10)
					Scorpius - Thần Nông (24/10-22/11)
					Sagittarius - Nhân Mã (23/11-21/12
				 */
				
				switch ($mon) {
					case 1:
						if($day <= 19){
							$name ="Ma Kết";
							$image = "Capricornus";
							$time = "22/12-19/1";
						}
					
					break;
					
				}
				
			}
		}
?>

	<div class="content">
		<h1>lấy chòm sao </h1>
		<form action="#" method="post" name ="main-form">
			<div class="row">
				<span>ngày sinh</span>
				<input type="text" name = "day" value="<?php echo $day;?>"/>
			</div>
			
			<div class="row">
				<span>tháng sinh</span>
				<input type="text" name = "month" value="<?php echo $mon;?>"/>
			</div>
			<div class="row">
				<input type="submit"  value="lấy chòm sao"/>
			</div>
						
		</form>
		
		<?php 
			$result = '<div class="result ">
						<img src="img /' .$image .' .ipg" alt=" ' . $image . ' "/>
						<p ' . $name .'<span>('.ucfirst( $image) . ' : ' .$time . ')</span></p>
					</div>';
				echo $result;
		?>			
	</div>

</body>
</html>