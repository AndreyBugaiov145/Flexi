<?php
require 'config.php';
require 'bdConect.php';
$arr = $dbh->query("SELECT * FROM `Product_1` ORDER BY product ");
$dbh = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="js/jquery-3.4.0.js"></script>
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
            <th scope="col">Удаление товара</th>
            <th scope="col">Изменить товара</th>
        </tr>
        <?php foreach ($arr as $value): ?>
            <tr class=''>
                <td><?php echo $value['product'] ?></td>
                <td><?php echo $value['price'] ?></td>
                <td><?php echo $value['short_description'] ?></td>
                <td><a href="serverTask12.php?<?php echo 'id=' . $value['id'] ?>" class="confirm">Удалить</a></td>
                <td><a href="task12Update.php?<?php echo 'id=' . $value['id'] ?>">Редактировать</a></td>

            </tr>
        <?php endforeach; ?>
    </table>
    <a href="task12Create.php">
        <button class="btn btn-success">Добавить товар</button>
    </a>
</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;bottom: 300px;">Вернуться к списку заданий</a>
<script>
    $('.confirm').click(
        function foo(e) {
            if (!confirm('вы уверены?')) {
                e.preventDefault();
            }
        })
</script>
</body>
</html>