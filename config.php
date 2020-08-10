<?php

	$host = '3.testsite.co.ua';
	$login = 'bugaiovandrey';
	$password = 'sdfsdfsklk3333';
	$bd = 'test';
/*
	$host = 'localhost';
	$login = 'root';
	$password = 'flexi140';
	$bd = 'tasks';
*/

	$misqli = new mysqli($host  , $login  ,$password,$bd );
	$misqli->query("SET NAMES 'utf8'");

	$sucses = $misqli->query("SELECT * FROM `Product` ORDER BY product "); 
	function get($ar)
	{	$arr = array();
		while(($row = $ar->fetch_assoc())!=false){
			$arr[] = $row;
		}
		return $arr;
	}
		 $arr =get($sucses);
		 var_dump($arr);

	$misqli->close();
?>