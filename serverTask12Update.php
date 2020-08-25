<?php

require 'config.php';
require 'bdConect.php';

$dbh->query("UPDATE `Product_1` SET `product`='{$_POST['product']}',`price`='{$_POST['price']}',`short_description`='{$_POST['short_description']}',`user_id`='{$_POST['select']}' WHERE `id`={$_GET["id"]}");

$dbh = null;
header("location: task12.php");

?>