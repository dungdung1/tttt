<?php
	$str ="&lt;br&gt;PHP&lt;/br&gt; is easy";
	echo "Input: ".$str."<br/>";
	echo "output: " .htmlspecialchars_decode($str);