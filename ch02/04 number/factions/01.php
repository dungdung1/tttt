<?php
	require_once 'fractions.php';
	
	$fractions1 ="52/6";
	$fractions2 ="34/8";
	
	echo "<hr/> Input: <br/>";
	echo "phần số 1: " .$fractions1."<br/>";
	echo "phần số 2: " .$fractions2."<br/>";
	
	$fractions1 = optimizeFraction($fractions1);
	$fractions1 = optimizeFraction($fractions2);
	
	
	echo "<hr/> Toi gian:  <br/>";
	echo "phần số 1: " .$fractions1."<br/>";
	echo "phần số 2: " .$fractions2."<br/>";
	
	