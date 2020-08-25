<?php
require 'config.php';
require 'bdConect.php';

$arrId = array(1, 2, 6, 4);

$placeholder = implode(',', array_fill(0, count($arrId), '?'));

$sth = $dbh->prepare("SELECT * FROM `task16` WHERE `id` IN($placeholder)");

$sth->execute($arrId);

$arrUsers = $sth->fetchAll(PDO::FETCH_ASSOC);

$sth = null;
$dbh = null;
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
            Имеется массив чисел, получить из таблицы в задаче 20 список всех пользователей, чьи ID совпадают с числами из массива.
        </span>
    </div>
</div>

</body>
</html>