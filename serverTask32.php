<?php
require 'config.php';
require 'bdConect.php';
$err = '';
$status = false;

if (preg_match('"[^0-9]"', $_POST["number"])) {
    $status = true;
    $err .= 'номер телефона должен содержать только цифры ; ';
}
if (strlen($_POST['name']) < 5) {
    $status = true;
    $err .= 'Имя должно содержать минимум 5 сейчас символов -' . strlen($_POST['name']);
}
if ($status) {
    header(' ', 'TRUE', '422');
    echo $err;

} else {
    setcookie("TestCookie", '', time() - 7);
    $name = htmlspecialchars($_POST["name"]);
    $number = htmlspecialchars($_POST["number"]);

    try {
        $sth = $dbh->prepare("INSERT INTO `task32`(`name`,`numbe`) VALUES (:name,:number)");
        $r = $sth->execute(array('name' => $name, 'number' => $number));
    } catch (PDOException $e) {
        echo 'Подключение не удалось: ' . $e->getMessage();
    }
    $dbh = null;
    $sth = null;
}

?>