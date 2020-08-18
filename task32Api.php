<?php
require 'config.php';
require 'bdConect.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$sth=$dbh->query("SELECT * FROM `Product` ORDER BY product "); 
	$respons = $sth->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($respons);
}else if($_SERVER['REQUEST_METHOD'] == 'POST'){
	echo $_POST['id'];
	$sth =$dbh->prepare("DELETE FROM `task32` WHERE `id` = :id");
	$sth->execute(['id'=>$_POST['id']]);
	echo 'запись была удалена';
}

$dbh = null;
?>