<?php

$misqli = new mysqli("localhost" , "root" ,"flexi140","tasks");
$misqli->query("SET NAMES 'utf8'");
$sucses = $misqli->query("UPDATE `Product` SET `product`='{$_POST['product']}',`price`='{$_POST['price']}',`short_description`='{$_POST['short_description']}',`userId`='{$_POST['select']}' WHERE `id`={$_COOKIE["id"]}"); 

$misqli->close();
header("location: task12.php");

?>