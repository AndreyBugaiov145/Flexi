<?php
require 'config.php';
require 'bdConect.php';



$dbh->query("CREATE TABLE `tasks`.`Task14` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB");

$dbh = null;
?>