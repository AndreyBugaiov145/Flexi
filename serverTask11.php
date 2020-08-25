<?php
if (!is_numeric($_POST["firstNamber"]) || !is_numeric($_POST["secondNamber"])) {
    echo "Вы ввели ошибочные данные";
    return;
}

switch ($_POST["select"]) {
    case '+':
        $result = $_POST["firstNamber"] + $_POST["secondNamber"];
        break;
    case '-':
        $result = $_POST["firstNamber"] - $_POST["secondNamber"];
        break;
    case '*':
        $result = $_POST["firstNamber"] * $_POST["secondNamber"];
        break;
    case '/':
        $result = $_POST["firstNamber"] / $_POST["secondNamber"];
        break;
    default:
        $result = $_POST["firstNamber"] / $_POST["secondNamber"];
        break;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Calc</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<h1><?= $result?></h1>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top: 0;">Вернуться к списку заданий</a>
</body>
</html>
