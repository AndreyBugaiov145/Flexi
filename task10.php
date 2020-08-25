<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Выпадающий список</title>
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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="formTime">
        <span>Выбери страну что бы узнать время</span>
        <select  class="form-control form-control-sm">
            <option value="Asia/Tokyo">Китай</option>
            <option value="Europe/Moscow">Россия</option>
            <option value="Europe/Kiev">Украина</option>
            <option value="Europe/Minsk">Белоруссия</option>
            <option value="Europe/Paris">Франция</option>
            <option value="Europe/Riga">Латвия</option>
            <option value="Europe/Rome">Итлия</option>
            <option value="Europe/Berlin">Германия</option>
            <option value="Europe/Lisbon">Португалия</option>
            <option value="Asia/Hong_Kong">Япония</option>
        </select>
    </form>
</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top: 0;">Вернуться к списку заданий</a>
<script>
    const el = document.getElementById("formTime");
    el.addEventListener('change', getTime, false);

    function getTime() {

        let TimeZone = el.querySelector("select").value;
        var formdata = new FormData();
        formdata.append("TimeZone", TimeZone);

        var requestOptions = {
            method: 'POST',
            body: formdata,
            redirect: 'follow'
        };
        fetch("http://3.testsite.co.ua/serverTask10.php", requestOptions)
            .then(response => response.text())
            .then(result => alert(result))
            .catch(error => console.log('error', error));
    }
</script>
</body>
</html>