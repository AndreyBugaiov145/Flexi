<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
        }

        div {
            margin: 0 auto;
            background-color: silver;
            border-radius: 15px;
            padding: 10px;
            width: 200px;
        }

        label {
            font-size: 1.3em;
            padding-left: 40px;
        }

        .inpute {
            position: absolute;
            width: 0px;
            height: 0px;
            overflow: hidden;
        }

        .inpute:checked + span {
            background: url(svg/iconmonstr-handshake-6.svg) no-repeat green;
            background-size: 30px;
        }

        .inpute:checked:disabled + span {
            background: url(svg/iconmonstr-handshake-9.svg) no-repeat green;
            background-size: 30px;
        }

        .inpute:disabled + span {
            background: url(svg/iconmonstr-handshake-9.svg) no-repeat #fff;
            background-size: 30px;
        }

        span {
            position: relative;
            top: -25px;
            background: url(svg/iconmonstr-handshake-2.svg) no-repeat #fff;
            background-size: 30px;
            width: 30px;
            height: 30px;
            overflow: hidden;
            color: red;
            display: block;
            border-radius: 50%;
        }

        .btn {
            cursor: pointer;
            position: absolute;
            right: 0;
            top: 0;
            padding: 9px;
            border-radius: 6px;
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div>
    <form action="" method="">
        <label><input type="checkbox" class="inpute">Первый <span class="check-box"></span></label>
        <label><input type="checkbox" class="inpute" checked="checked">Второй<span class="check-box"></span></label>
        <label><input type="checkbox" class="inpute" disabled="disabled" checked="checked">Третий <span
                    class="check-box"></span></label>
        <label><input type="checkbox" class="inpute" disabled="disabled">Четвертый<span
                    class="check-box"></span></label>
    </form>
</div>
<a href="index.php " class="btn">Вернуться к списку заданий</a>
</body>
</html>