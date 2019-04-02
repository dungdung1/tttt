<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css"/>
<title>Thao Tác Ngày với Tháng</title>
</head>
<link rel="stylesheet" type="text/css" href="item.css">
<body>
<?php 
	$arrDays = range(1, 31);
	$arrmonths= range(1, 12);
	$arryears = range(2000, 2020);
	
	function createSlectBox($arrData, $name,$keySelected){
			$strDays ="";
			if (!empty($arrData)){
				$strDays = '<select name = "'.$name.'">';
				for ($i = 0 ; $i < count($arrData); $i++){
					if ($keySelected == $i){
						$strDays .= '<option value="'.$i.'" Selected ="true">'.$arrData[$i].'</option>';
					}else {
						$strDays .= '<option value="'.$i.'">'.$arrData[$i].'</option>';
					}
					
				}
				$strDays.='</select>';
			}
			return  $strDays;
	}

	
	$days = (isset($_POST['days - select'])) ? $_POST['days - select'] :0;
	$months = (isset($_POST['months - select'])) ? $_POST['months - select'] :0;
	$years = (isset($_POST['years - select'])) ? $_POST['years - select'] :0;
	
	$strDays = createSlectBox($arrDays,"days-select",$days);
	$strmonths = createSlectBox($arrmonths,"months-select",$months);
	$stryears = createSlectBox($arryears,"years-select",$years);
	

?>
	<div class="content">
	  <h1>Thao Tác Ngày với Tháng</h1>
		<form action="#" method="post" id ="mainFrom" name="mainFrom">
			<div class="row">
				<span>ngay: </span>
				<?php echo $strDays;?>			
			</div>
			<div class="row">
				<span>tháng: </span>
				<?php echo $strmonths;?>
				
			</div>
			<div class="row">
				<span>năm: </span>
				<?php echo $stryears;?>
			</div>
			<div class="row">
				<input type="submit" value="checkin data"/>
			</div>
			<div class="result">
				<?php 
					echo "ngày được chọn: $arrDays[$days]/$arrmonths[$months]/$arryears[$years]";
					if(checkdate($arrmonths[$months],$arrDays[$days], $arryears[$years])){
						echo "<p>ngày hợp lệ</p>";
					}else {
						echo "<p>ngày không hợp lệ</p>";
					}
				?>
			</div>
		</form>
	</div>

</body>
</html>