<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=${encoding}">
<title>Insert title here</title>
<style type="text/css">
*{
	padding: 0px;
	margin: 0px;
	}
.connec{
	width: 500px;
	height: auto;
	padding: 10px ;
	margin: 10px auto;
	border: 3px solid gray;
	}
</style>
</head>
<body>
<div class="connec">
	<?php 
		$group = array("1" => "admin","2" => "Manager","3" => "Meber","4" => "Guest");
		$city = array("ct" => "can tho","tg" => "tien giang","th" => "thanh hoa");
		
		function createSlectBox($name , $attributtes, $array,$keySlect){
			$xhtml ="";
			if(!empty($array)){
				$xhtml .='<Select name ="'.$name.'" id = "'.$name.'" style="'.$attributtes.'">';
				foreach ($array as $key => $value){
					if($key == $keySlect){
						$xhtml .='<option value ="'.$key.'"selected = "selecter">'.$value.'</option>';
					}else {
						$xhtml .='<option value ="'.$key.'">'.$value.'</option>';
					}
				}
				$xhtlm ='</select>';
			}
			return $xhtml;
		}		
			$groupSelect = createSlectBox("group","width :200px",$group,4);
			$citySelect = createSlectBox("city","width :300px",$city,"th");
			
			echo $groupSelect ."<br/>";
			echo $citySelect;
	?>
	
		
	</div>
</body>
</html>