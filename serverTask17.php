<?php

if(isset($_FILES['file'])){
	$errors = array();
	$file_name = $_FILES['file']["name"];
	$file_size = $_FILES['file']["size"];
	$file_tmp = $_FILES['file']["tmp_name"];
	$file_type = $_FILES['file']["type"];
	//$file_ext = strtolower(end(explode(".", $_FILES['file']["name"])));

	$expensions= array("jpeg","png","jpg");

	echo "<br> file_name =  ".$file_name ;
	echo "<br> file_size =  ".$file_size ;
	echo "<br> file_tmp =  ".$file_tmp ;
	echo "<br> file_type =  ".$file_type ;
	echo "<br> file_ext =  ".$file_ext ;
	echo "<br>";
	echo "<br>";
	print_r($_FILES['file']);

	move_uploaded_file($file_tmp, $file_name);

}

var_dump($_FILES['file']);

?>