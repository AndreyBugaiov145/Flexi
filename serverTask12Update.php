<?php

require 'config.php';
require 'bdConect.php';

$dbh->query("UPDATE `Product` SET `product`='{$_POST['product']}',`price`='{$_POST['price']}',`short_description`='{$_POST['short_description']}',`userId`='{$_POST['select']}' WHERE `id`={$_GET["id"]}"); 

$dbh = null;
header("location: task12.php");

?>