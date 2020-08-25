<?php
require 'config.php';
require 'bdConect.php';
$productAll = $dbh->query("SELECT product, price, short_description , users_1.name as user FROM `Product_1`
INNER JOIN users_1 ON users_1.id = Product_1.user_id ORDER BY product ");
$dbh = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        button {
            float: right;
            position: relative;
            top: -40px;
            margin-right: 30px;
        }

        table {
            margin: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <table class="table table-striped table-bordered ">
        <caption>Таблица товаров</caption>
        <tr class="text-center table-info">
            <th scope="col">Название товара</th>
            <th scope="col">Цена</th>
            <th scope="col">Описание</th>
            <th scope="col">Имя владельца</th>
        </tr>
        <?php foreach ($productAll as $product): ?>
            <tr class=''>
                <td><?php echo $product['product'] ?></td>
                <td><?php echo $product['price'] ?></td>
                <td><?php echo $product['short_description'] ?></td>
                <td><?php echo $product['user'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top:0;">Вернуться к списку заданий</a>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark mt-5 container">
    <div class="col-md-6 px-0">
        <span>
             Используя наработки из задачи 15:
            В имеющуюся таблицу где мы выводим список товаров — добавить колонку «Владелец» и вывести туда имя и фамилию пользователя, которому принадлежит товар.
        </span>
    </div>
</div>
</body>
</html>

