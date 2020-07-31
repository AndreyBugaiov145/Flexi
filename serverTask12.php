<?php

$misqli = new mysqli("localhost" , "root" ,"flexi140","tasks");
$misqli->query("SET NAMES 'utf8'");



if(!isset($_COOKIE["id"])){
	$misqli->close();
	echo "Что то пошло не так попробуйте снова";
	exit;
}

function deleteRow($id)
{
	global $misqli;
	$misqli->query("DELETE FROM `Product` WHERE `id`={$id}");
	echo "good";
	$misqli->close();
}
if ($_COOKIE["type"]=="delet") {
	deleteRow($_COOKIE["id"]);
}


$misqli->close();
header("location: task12.php");


?>