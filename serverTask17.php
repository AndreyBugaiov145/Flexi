<?php

if(isset($_FILES['file'])){
	$load = "load";
	$file_name = $_FILES['file']["name"];
	$file_tmp = $_FILES['file']["tmp_name"];
	$file_type = $_FILES['file']["type"];

	move_uploaded_file($file_tmp, "$load/$file_name");

	if ((explode("/",$file_type ))[0] === 'image') {
		echo "<img style='width:300px,height:300px' src='load/{$file_name}'>";
	}else{
		echo "<a href='load/{$file_name}' download>Скачать файл</a>";
	}
}

?>