<?php
	$file = fopen("task6.php","r");
	//fwrite($file,$_POST['text']);
	echo fread($file,500);
	/*while (!feof($file)) {
		echo fread($file,500);
	}*/
	fclose($file);

//               1
	/*file_put_contents("text.txt",$_POST['text']);
	echo file_get_contents("text.txt");*/

	//unlink("text.txt");


?>