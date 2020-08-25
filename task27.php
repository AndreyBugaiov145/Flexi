<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task27</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .content {
            float: left;
            width: 40%;
            margin: 3%;
            padding: 8px;
            height: 100%;
            border: 1px solid silver;
            border-radius: 10px;
        }

        .moretext {
            display: none;

        }

        label {
            padding: 4px;
        }

        .hide {
            display: none;
        }

        input:checked + span {
            display: block;
        }
    </style>
</head>
<body>
<div class="content">
    <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus odio quas, provident asperiores. Magnam, minus, a! Sit nobis rerumvident asperiores. Magnam, minus, a! Sit nob illum delectus unde est, ex ad repudiandae asperiores deserunt, vero fuga!</span>
    <input type="checkbox" class="hide" id="text1">
    <span class="moretext">Lorem ipsu ipsum dolor sit amet, consectetur adipisicing elit. Accusamus odio quas, provident asperiores. Magnam, minus, a! Sit nobis rerum illum del ipsum dolor sit amet, consectetur adipisicing elit. Accusamus odio quas, provident asperiores. Magnam, minus, a! Sit nobis rerum illum delm dolor sit amet, consectetur adipisicing elit. Accusamus odio quas, provident asperiores. Magnam, minus, a! Sit nobis rerum illum delectus unde est, ex ad repudiandae asperiores deserunt, vero fuga!</span>
    <label for="text1" crole="button" class="btn btn-secondary">посмотреть большще</label>
</div>
<div class="content">
    <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus odio quas, provident asperiores. Magnam, minus, a! Sit nobis rerum ivident asperiores. Magnam, minus, a! Sit nobllum delectus unde est, ex ad repudiandae asperiores deserunt, vero fuga!</span>
    <input type="checkbox" class="hide" id="text2">
    <span class="moretext">Lorem ipsum dolor sit amet, co ipsum dolor sit amet, consectetur adipisicing elit. Accusamus odio quas, provident asperiores. Magnam, minus, a! Sit nobis rerum illum del ipsum dolor sit amet, consectetur adipisicing elit. Accusamus odio quas, provident asperiores. Magnam, minus, a! Sit nobis rerum illum delnsectetur adipisicing elit. Accusamus odio quas, provident asperiores. Magnam, minus, a! Sit nobis rerum illum delectus unde est, ex ad repudiandae asperiores deserunt, vero fuga!</span>
    <label for="text2" crole="button" class="btn btn-secondary">посмотреть большще</label>

</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;bottom:300px;">Вернуться к списку заданий</a>
</body>
</html>