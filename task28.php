<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['matrix1']) || empty($_POST['matrix1'])) {
        echo "ошибка ввода <a href='task28.php'>попробовать снова<a>";
        exit();
    }
    $mass1 = explode("\n", $_POST['matrix1']);
    $mass2 = explode("\n", $_POST['matrix2']);

    $lengthMass = count($mass1) > count($mass2) ? count($mass1) : count($mass2);

    $matrix1 = [];
    $matrix2 = [];
    $count = 0;
    $rezaltMass = [];

    foreach ($mass1 as $value) {
        $matrix1[] = explode(" ", $value);
        $count = $count > count(explode(" ", $value)) ? $count : count(explode(" ", $value));
    }

    foreach ($mass2 as $value) {
        $matrix2[] = explode(" ", $value);
        $count = $count > count(explode(" ", $value)) ? $count : count(explode(" ", $value));
    }


    for ($i = 0; $i < $lengthMass; $i++) {
        for ($j = 0; $j < $count; $j++) {
            $matrix1[$i][$j] = isset($matrix1[$i][$j]) ? $matrix1[$i][$j] : 0;
            $matrix2[$i][$j] = isset($matrix2[$i][$j]) ? $matrix2[$i][$j] : 0;
            $rezaltMass[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
        $rezaltMass[$i] = implode(" ", $rezaltMass[$i]);
    }

    /* echo "<br>";
     foreach ($mass1 as $v) {
         echo "$v<br>";
     }

     echo "+<br>";
     foreach ($mass2 as $v) {
         echo "$v<br>";
     }
     echo "=<br>";
     foreach ($rezaltMass as $v) {
         echo "$v<br>";
     }*/
    $str = '';
    //echo "=<br>";
    foreach ($rezaltMass as $line) {
        $str .= "$line<br>";
    }

}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
            margin-top: 2%;
        }

        textarea {
            text-indent: 0px;
        }

    </style>
</head>
<body>
<div class="container page">
    <h2>Сложение матриц</h2>
    <form action="" method="POST">
        <div class="form-group form">
            <label >  Введите первую матрицу</label>
            <textarea name="matrix1" id="matrix1" cols="30" rows="10"
                      class="form-control"><?= isset($_POST['matrix1'])?$_POST['matrix1']:false ?></textarea>
        </div>
        <div class="form-group form">
            <label >  Введите вторую матрицу</label>
            <textarea name="matrix2" id="matrix2" cols="30" rows="10"
                      class="form-control"><?= isset($_POST['matrix2'])?$_POST['matrix2']:false  ?></textarea>
        </div>
        <input type="submit" name="submit" class="btn btn-success">
    </form>
    <div>
        <h3>Результат сложения матриц</h3>
        <span><?= isset($str)?$str:false ?></span>
    </div>
</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top:0;">Вернуться к списку заданий</a>
</body>
</html>