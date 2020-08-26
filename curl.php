<?php
if (isset($_GET['id'])) {
    $chDelete = curl_init('http://3.testsite.co.ua/task32Api.php');
    curl_setopt($chDelete, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($chDelete, CURLOPT_POSTFIELDS, ['id' => $_GET['id']]);
    $responsDelete = curl_exec($chDelete);
    curl_close($chDelete);
}
$ch = curl_init('http://3.testsite.co.ua/task32Api.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$respons = curl_exec($ch);
curl_close($ch);
$respons = json_decode($respons);
?>
<? if (isset($respons)): ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
              integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
              crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <table class="table table-striped table-bordered ">
            <tr class="text-center table-info">
                <th scope="col">Имя</th>
                <th scope="col">Номер телефона</th>
                <th scope="col">Удалить</th>
            </tr>
            <?php foreach ($respons as $value): ?>
                <tr class=''>
                    <td><?= $value->name ?></td>
                    <td><?= $value->numbe ?></td>
                    <td><a href="<?= $_SERVER['PHP_SELF'] . "?id=" . $value->id ?>" class="confirm">Удалить</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <a href="http://3.testsite.co.ua/ " class="btn btn-info " style="position:absolute; right: 0;top:400px;">Вернуться к
        списку
        заданий</a>
    </body>
    </html>
<? endif; ?>
<? if (isset($responsDelete)): ?>
    <script>alert("<?=$responsDelete?>")</script>
<? endif; ?>