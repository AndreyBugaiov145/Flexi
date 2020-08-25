<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Аккордеон</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .page {
            background-color: silver;
            border-radius: 5px;
            width: 400px;
            padding: 10px;
            margin: 5px;
        }

        .hide {
            display: none;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="page">
        <span>Блок-1</span>
        <ul class="">
            <li>dsfsdfsd</li>
            <li>sdfsdfs</li>
            <li>sdfsdf</li>
            <li>sdfsdff</li>
        </ul>
    </div>
    <div class="page">
        <span>Блок-2</span>
        <ul class="hide ">
            <li>dsfsdfsd</li>
            <li>sdfsdfs</li>
            <li>sdfsdf</li>
            <li>sdfsdff</li>
        </ul>
    </div>
    <div class="page">
        <span>Блок-3</span>
        <ul class="hide ">
            <li>dsfsdfsd</li>
            <li>sdfsdfs</li>
            <li>sdfsdf</li>
            <li>sdfsdff</li>
        </ul>
    </div>
    <div class="page">
        <span>Блок-4</span>
        <ul class="hide ">
            <li>dsfsdfsd</li>
            <li>sdfsdfs</li>
            <li>sdfsdf</li>
            <li>sdfsdff</li>
        </ul>
    </div>
</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top:0;">Вернуться к списку заданий</a>
<script>

    let e = $(".page").on('click', akardeon);

    function akardeon(e) {
        $(this).siblings().each(function (i, elem) {
            $(elem).children().last().slideUp(200);
        })
        $(this).children().last().slideDown(200);
    }

</script>
</body>
</html>