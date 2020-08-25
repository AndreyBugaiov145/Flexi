<?php
if (isset($_POST['submit'])) {
    if (isset($_FILES['file'])) {
        $load = "load";
        $fileName = $_FILES['file']["name"];
        $fileTmp = $_FILES['file']["tmp_name"];
        $fileType = $_FILES['file']["type"];
        move_uploaded_file($fileTmp, "$load/$fileName");
    }
}
$dir = "load/";
$str = '';
if (is_dir($dir)) {
    $type = array('jpg', 'png', 'jpeg');
    $files = scandir($dir);
    array_shift($files);
    array_shift($files);
    for ($i = 0; $i < sizeof($files); $i++) {
        if ((explode(".", $dir . $files[$i]))[1] === $type[0] || (explode(".", $dir . $files[$i]))[1] === $type[1] || (explode(".", $dir . $files[$i]))[1] === $type[2]) {
            $str .= "<div class='d'><img style='width:300px,height:300px' src='{$dir}{$files[$i]}'></div><br>";
        } else {
            $str .= "<div class='d'><a href='{$dir}{$files[$i]}' download>Скачать файл</a></div><br>";
        }
    }
} else echo $dir . ' -такой директории нет;<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task17</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        form {
            margin: 20px;
            padding: 5px;
        }

        .d {
            float: left;
            margin: 10px;
            border-bottom: 2px solid silver;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <label> Добавить файл<input type="file" name="file"></label>
        <input type="submit" name="submit" class="btn btn-primary" value="отправить">
    </form>
    <?= $str ?>
</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;bottom: 300px;">Вернуться к списку заданий</a>
</body>
</html>