<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Calc</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .page {
            position: relative;
            margin: 0 auto;
            width: 500px;
            background-color: silver;
            padding: 10px;
            border-radius: 10px;
            margin-top: 7%;
        }
    </style>
</head>
<body>
<div class="page container">
    <form action="serverTask11.php" method="post">
        <div class="form-group form">
            <label for="firstNamber">Введите первое число
                <input class="form-control" type="text" name="firstNamber" id="firstNamber"></label></div>
        <div class="form-group form">
            <label for="secondNamber">Введите первое числ
                <input class="form-control" type="text" name="secondNamber" id="secondNamber"></label></div>
        <span>Выбери операцию</span>
        <select name="select" id="select" class="form-control form-control-sm">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="посчитать" class="btn btn-success mt-3" >
    </form>
</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top: 0;">Вернуться к списку заданий</a>
</body>
</html>