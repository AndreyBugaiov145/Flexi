<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактирование товара</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="js/jquery-3.4.0.js"></script>
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

        .err {
            display: none;
        }
    </style>
</head>
<body>
<div id="err" class='err'>
    <span style='color:red'></span>
</div>
<div class="page ">
    <h2 class="">Создание записи</h2>
    <hr>
    <form action="<? $_SERVER['PHP_SELF'] ?>" method="post" class=' '>
        <div class="form-group form ">
            <label for="name">Введите ваше имя<small>(не мение 5 символов)</small></label>
            <input type="text" name="name" id="name" value="" class="form-control">
        </div>
        <div class="form-group form">
            <label for="number">Выбериет номер телефона</label>
            <input type="text" name="number" id="number" value="" class="form-control">
        </div>
        <input type="button" value="создать " name="submit" class="btn btn-success" id="btn">
    </form>
</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top:0;">Вернуться к списку заданий</a>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark mt-5 container">
    <div class="col-md-6 px-0">
        <span>
             Выполнить следующие задачи:
- Создать форму и обработчик для нее. Если пользователь ввел неправильные данные, должна вернуться ошибка валидации и соответствующий статус. Данные должны отправляться через AJAX и сохраняться в базу данных.
- Создать простое api. Которое будет отдавать данные всех пользователей (см пункт 3) так же иметь возможность удалить данные через post запрос.
- Создать отдельный сайт. В котором данные должны получаться через curl с api, которое было создано ранее.
        </span>
    </div>
</div>
<script>
    String.prototype.replaceAll = function (search, replace) {
        return this.split(search).join(replace);
    }

    $("#btn").on("click", foo);

    function foo(argument) {
        let data = {
            'name': $("[name=name]").val(),
            'number': $("[name=number]").val()
        }
        console.log(data)
        $.ajax({
            url: 'serverTask32.php',
            type: 'post',
            data: data,
            success: function function_name(d_data, status) {
                console.log(d_data);

            },
            error: function (d_data) {
                $('#err').removeClass('err').children().first().text(d_data['responseText']);
            },
            dataType: "text",
            timeOut: 1000,
            crossDomain: true,
            scriptCharset: "utf8"
        });
    }
</script>
</body>
</html>
