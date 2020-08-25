<?php
date_default_timezone_set("Europe/Kiev");

if (isset($_GET['submit'])) {

    require 'config.php';
    require 'bdConect.php';

    $dateFrom = date("m-d", strtotime($_GET['date_from']));
    $dateTo = date("m-d", strtotime($_GET['date_to']));
    if ($dateFrom > $dateTo) {
        echo "неверный выбор даты<a href='task16.php'> попробовать снова<a>";
        exit;
    }

    $sucses = $dbh->query("SELECT `name` , `date` FROM `task16` WHERE DATE_FORMAT(date, '%m-%d') > '{$dateFrom}' AND DATE_FORMAT(date, '%m-%d') < '{$dateTo}' ORDER BY `date` ");

    $arrUsers = $sucses->fetchAll(PDO::FETCH_ASSOC);

    $dbh = null;
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
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>

        .page {
            margin: 0 auto;
            width: 400px;
        }
    </style>
    <script>
        $(function () {
            $("#date_from").datepicker({
                dateFormat: 'dd-mm-yy'
            });
            $("#date_to").datepicker({
                dateFormat: 'dd-mm-yy'
            });
        });

    </script>
</head>
<body>
<? if (isset($arrUsers)): ?>
    <div class=" container">
        <table class='table table-striped table-bordered '>
            <tr class='text-center table-info'>
                <th scope='col'>Имя</th>
                <th scope='col'>Дата рождения</th>
                <? foreach ($arrUsers as  $user): ?>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['date'] ?></td>
            </tr>
            <? endforeach; ?>
        <table>
    </div>
<? endif; ?>
<div class="page container">
    <h3>Выберите диапазон , что бы посмотреть пользователей</h3>
    <form action="" method="get">
        <div class="form-group form ">
            <p>Date: <input type="text" id="date_from" name="date_from" class="form-control"></p>
        </div>
        <div class="form-group form ">
            <p>Date: <input type="text" id="date_to" name="date_to" class="form-control"></p>
        </div>
        <input type="submit" name="submit" class="btn btn-primary">
    </form>
</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;bottom: 300px;">Вернуться к списку заданий</a>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark mt-5 container">
    <div class="col-md-6 px-0">
        <span>
            Создать два текстовых поля и подключить datepicker.
При выборе диапазона, вывести пользователей с датой рождения в этом диапазоне.
        </span>
    </div>
</div>
</body>
</html>