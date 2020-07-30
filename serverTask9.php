<?php
	$file = fopen("text.txt","a+");
	fwrite($file,$_POST['text']);
	
	while (!feof($file)) {
		echo fread($file,2);
	}
	fclose($file);
//               1
	/*file_put_contents("text.txt",$_POST['text']);
	echo file_get_contents("text.txt");*/

	unlink("text.txt");

?>