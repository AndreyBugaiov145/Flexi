<?php
require 'config.php';
require 'bdConect.php';

$status = false;

if (preg_match('"[^0-9]"', $_POST["number"])) {
	$status=true;
}else if (strlen($_POST['name'])<5){
	$status=true;
}
if($status) {
	header ( ' ', 'TRUE' , '400' );
}else{
	$name = htmlspecialchars($_POST["name"]);
	$numbe = htmlspecialchars($_POST["number"]);
	$sth=$dbh->prepare("INSERT INTO `task32`(`name`,`number`) VALUES (:name,:numbe)");
	$r =$sth->execute(array('name'=>$name,'numbe'=>$numbe));
	$dbh = null;
}

?>