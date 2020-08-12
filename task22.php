<?php
	require 'config.php';
	$dbh = new PDO("mysql:host=$host;dbname=$bd;charset=UTF8", "$login", "$password");
	$results =$dbh->query("SELECT * FROM `task16` WHERE DATE_FORMAT(date, '%m%d')<=DATE_FORMAT(DATE_ADD(NOW(), INTERVAL 10 DAY),'%m%d') ORDER BY DATE_FORMAT(date, '%m%d') ");

	foreach ($results as $row) {
	echo "Имя --".$row['name']."//   Датa рождения = ".$row['date']."<br/>";
}

?>
