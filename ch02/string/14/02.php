
<?php
	echo $str ="Tham dự buổi làm việc có ông Hầu A Lềnh, Ủy viên Trung ương Đảng, Phó Chủ tịch - Tổng Thư ký UBTƯ MTTQ Việt Nam; ông Bùi Minh Châu, Bí thư Tỉnh ủy, Chủ tịch HĐND tỉnh; ông Bùi Văn Quang, Phó Bí thư Thường trực Tỉnh ủy, Chủ tịch UBND tỉnh; các Phó Chủ tịch UBTƯ MTTQ Việt Nam: Trương Thị Ngọc Ánh, Ngô Sách Thực, Phùng Khánh Tài, cùng các đồng chí nguyên lãnh đạo UBTƯ MTTQ Việt Nam qua các thời kỳ và đại diện lãnh đạo HĐND, UBND, Ủy ban MTTQ Việt Nam, các sở, ngành liên quan tỉnh Phú Thọ.";
	
	function fafaString($str,$lal = 50, $gg = "..."){
	 	$result = $str;
	 	
	 	if(strlen($str) > $lal){
	 		$result = substr($str, 0,$lal).$gg;
	 		
	 	}
	 	return $result;
	 }
	 $str = fafaString($str , 40 ,"...");
	 echo "<br/>".$str;
	 
	 ?>
	
	