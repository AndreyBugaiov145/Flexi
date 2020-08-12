<?php
	$arr = array(1,2,6,4);
	require 'config.php';
	$dbh = new PDO("mysql:host=$host;dbname=$bd;charset=UTF8", "$login", "$password");
	$sth =$dbh->prepare("SELECT * FROM `task16` WHERE id IN(?) ");
	foreach ($arr as $v ) {
		$sth->execute([$v]);
		$row = $sth->fetch(PDO::FETCH_ASSOC);
		echo "ID --".$row['id']." Имя --".$row['name']."//   Датa рождения = ".$row['date']."<br/>";
	}
	$sth = null;
	$dbh = null;
?>
