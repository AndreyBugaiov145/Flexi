<?php
function cast()
{
    $rez = true;
    $type = null;
    $args = func_get_args();

    foreach ($args as $val) {
        $type = $type ? $type : gettype($val);
        $rez = ($type === gettype($val) && $rez) ? true : false;
    }

    if (!$rez) {
        for ($i = 0; $i < count($args); $i++) {
            $args[$i] = strval($args[$i]);
        }
    }
    return $args;
}

var_dump(cast(15, 4, 87));

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