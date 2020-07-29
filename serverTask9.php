<?php
	file_put_contents("text.txt",$_POST['text']);
	echo file_get_contents("text.txt");
	unlink("text.txt")
?>