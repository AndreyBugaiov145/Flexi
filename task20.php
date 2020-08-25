<?php
require 'config.php';
require 'bdConect.php';
try {
    $results = $dbh->query("SELECT * FROM `task16` WHERE DATE_FORMAT(date, '%m%d')>=DATE_FORMAT(NOW(), '%m%d') AND DATE_FORMAT(date, '%m%d')<=DATE_FORMAT(DATE_ADD(NOW(), INTERVAL 10 DAY),'%m%d') ORDER BY DATE_FORMAT(date, '%m%d') ");
    if (!$results) {
        exit("Не вышло подключиться к БД");
    }
    $arrUsers = $results->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    $dbh = null;
    die();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datepicker </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<? if ($arrUsers): ?>
    <div class="container">
        <table class='table table-striped table-bordered '>
            <tr class='text-center table-info'>
                <th scope='col'>Имя</th>
                <th scope='col'>Дата рождения</th>
            </tr>
            <? foreach ($arrUsers as $user): ?>
                <tr >
                    <td> <?= $user['name'] ?></td>
                    <td> <?= $user['date'] ?></td>
                </tr>
            <? endforeach; ?>
            <table>
    </div>
<? endif; ?>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;bottom: 300px;">Вернуться к списку заданий</a>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark mt-5 container">
    <div class="col-md-6 px-0">
        <span>
           Создать таблицу в базе данных.
В которой будут находиться данные о пользователях. Одно из полей будет дата рождения.
Получить всех пользователей, у которых будет день рождение через 10 дней.
        </span>
    </div>
</div>
</body>
</html>