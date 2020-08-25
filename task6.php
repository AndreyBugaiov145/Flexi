<?php
function getNumber($a, $b)
{
    if ($a > $b) {
        if ($a === 0 || $b === 0) {
            return "первое число больше на 100%";
        }
        return "первое число больше на " . ($a / $b * 100 - 100) . "%";
    } else if ($a === $b) {
        return "число равны";
    } else {
        if ($a === 0 || $b === 0) {
            return "первое число больше на 100%";
        }
        return "второе число больше на " . ($b / $a * 100 - 100) . "%";
    }
}

echo getNumber(32, 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top: 0;">Вернуться к списку заданий</a>
</body>
</html>