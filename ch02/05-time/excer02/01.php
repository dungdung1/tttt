<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css"/>
<title>Thao Tác Ngày với Tháng</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="content3">
	  <h2>LÀM VIỆC THEO THỜI GIAN</h2>
	  <?php 
	  $result = date('h:i A D, \n\g\à\y d/m/Y', time());
	  
	  $arrEn = array('Mon','Tue','Wed','thu','Fri','sat','sun');
	  $arrvi = array('thứ 2','thứ 3','thứ 4','thứ 5','thứ 6','thứ 7','chủ nhật');
	  
	  $result = str_replace(',',',', $result);
	  echo $result;
	  ?>
		
	</div>

</body>
</html>