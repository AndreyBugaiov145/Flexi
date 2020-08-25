<?php
require 'config.php';
$dbh = new PDO("mysql:host=$host;dbname=$bd;charset=UTF8", "$login", "$password");
$results = $dbh->query("SELECT * FROM `task16` WHERE DATE_FORMAT(date, '%m%d')<=DATE_FORMAT(DATE_ADD(NOW(), INTERVAL 10 DAY),'%m%d') ORDER BY DATE_FORMAT(date, '%m%d') ");
$arrUsers = $results->fetchAll(PDO::FETCH_ASSOC);
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
                <th scope='col'>id</th>
                <th scope='col'>Имя</th>
                <th scope='col'>Дата рождения</th>
            </tr>
            <? foreach ($arrUsers as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
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
           В таблице из задачи 20 получить список пользователей у которых уже прошел ДР в этом году и тех у кого ДР будет через 10 дней.
        </span>
    </div>
</div>
</body>
</html>
