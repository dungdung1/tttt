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
		
		$xhtml ="";
		if(!empty($group)){
			$xhtml .='<select name ="group" id = "group" style="width: 300px">';
			foreach ($group as $key => $value){
				$xhtml .='<option value ="'.$key.'">'.$value.'</option>';
			}
			$xhtlm ='</select>';
		}
		echo $xhtml;
	?>
	
		
	</div>
</body>
</html>