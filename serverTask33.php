<?php
require 'config.php';
require 'bdConect.php';
$fio = htmlspecialchars($_POST["fio"]);
$adres = htmlspecialchars($_POST["adres"]);
$book = $_POST["boock"];
$sth=$dbh->query("SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'user_task33'");
$row = $sth->fetch(PDO::FETCH_ASSOC);
$auto_increment =$row['auto_increment'];
$sth=$dbh->prepare("INSERT INTO `user_task33`(`fio`,`adres`) VALUES (:fio,:adres)");
$sth->execute(array('fio'=>$fio,'adres'=>$adres));
foreach($book as $valuse){
	$valuse=htmlspecialchars($valuse);
	$sth=$dbh->prepare("INSERT INTO `book`( `user_id`, `books`) VALUES (:user_id,:books)");
	$sth->execute(array('user_id'=>$auto_increment,'books'=>$valuse));
}
$sth = null;
$dbh = null;
header ( 'Location: task33.php' ) ;
?>