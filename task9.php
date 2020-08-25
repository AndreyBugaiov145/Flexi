<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Создание и чтение файла</title>
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
<div class="page">
    <h3>Сооздание файла</h3>
    <form action="serverTask9.php" method="POST" class="form1">
        <label for="text">ведите текст котрый будет записан в новый файл</label><br>
        <input class="form-control" type="text" id="text" name="text"><br>
        <input type="submit" value="создать текстовый файл" class="btn btn-danger">
    </form>
</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top: 0;">Вернуться к списку заданий</a>
</body>
</html>