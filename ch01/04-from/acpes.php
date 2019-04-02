<?php
	 $Username = $_GET["login"];
	 $password = $_GET["password"];
	 
	 $result = ($Username == "admin" && $password == "1234" ) ? "thanh cong" : "that bai";
	 echo $result;