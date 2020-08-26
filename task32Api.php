<?php
require 'config.php';
require 'bdConect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sth = $dbh->prepare("DELETE FROM `task32` WHERE `id` = :id");
    $rez = $sth->execute(['id' => $_POST['id']]);
    $dbh = null;
    if ($rez){
        echo 'sucses';
        exit();
    }
    echo 'что то пошло не так';
    exit();
}
$sth = $dbh->query("SELECT * FROM `task32` ");
$respons = $sth->fetchAll(PDO::FETCH_ASSOC);
$respons = json_encode($respons);
echo $respons;
$dbh = null;
?>
