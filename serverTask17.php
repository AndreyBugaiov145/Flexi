<?php

if(isset($_FILES['file'])){
	$img = "img";
	$file_name = $_FILES['file']["name"];
	$file_size = $_FILES['file']["size"];
	$file_tmp = $_FILES['file']["tmp_name"];
	$file_type = $_FILES['file']["type"];

	move_uploaded_file($file_tmp, "$img/$file_name");

	if ((explode("/",$file_type ))[0] === 'image') {
		echo "<img src='{$file_name}'>";
	}else{
		echo "string";
	}
}

?>