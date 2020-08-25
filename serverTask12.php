<?php

require 'config.php';
require 'bdConect.php';


if (!isset($_GET["id"])) {

    $dbh = null;
    echo "Что то пошло не так попробуйте снова";
    exit;
}

function deleteRow($id)
{
    global $dbh;
    $dbh->query("DELETE FROM `Product_1` WHERE `id`={$id}");
    $dbh = null;

}

deleteRow($_GET["id"]);


header("location: task12.php");


?>