<?php
require 'config.php';
require 'bdConect.php';
if (isset($_POST["submit"])) {
    $fio = htmlspecialchars($_POST["fio"]);
    $adres = htmlspecialchars($_POST["adres"]);
    $books = $_POST["boock"];
    $sth = $dbh->query("SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'user_task33'");
    $responsAutoIncrement = $sth->fetch(PDO::FETCH_ASSOC);
    $autoIncrement = $responsAutoIncrement['auto_increment'];
    $sth = $dbh->prepare("INSERT INTO `user_task33`(`fio`,`adres`) VALUES (:fio,:adres)");
    $sth->execute(array('fio' => $fio, 'adres' => $adres));
    foreach ($books as $book) {
        $book = htmlspecialchars($book);
        $sth = $dbh->prepare("INSERT INTO `book`( `user_id`, `books`) VALUES (:user_id,:books)");
        $sth->execute(array('user_id' => $autoIncrement, 'books' => $book));
    }
}
$arrUsres = $dbh->query("SELECT id, fio , adres FROM `user_task33`");

$responsBooks = $dbh->query("SELECT * FROM `book`");
$arrBooks = $responsBooks->fetchAll(PDO::FETCH_ASSOC);
function getUserId($arrBooks)
{
    $arrUserId = array();
    foreach ($arrBooks as $book) {
        !in_array($book['user_id'], $arrUserId) ? $arrUserId[] = $book['user_id'] : false;
    }
    return $arrUserId;
}

function getArrBookByUsers($arrBooks)
{
    $bookByUsers = array();
    $arrUserId = getUserId($arrBooks);
    foreach ($arrUserId as $userId) {
        $bookByUsers[$userId] = '';
        foreach ($arrBooks as $book) {
            $book['user_id'] == $userId ? $bookByUsers[$userId][] = $book['books'] : false;
        }
        $bookByUsers[$userId] = implode(',', $bookByUsers[$userId]);
    }
    return $bookByUsers;
}

$bookByUsers = getArrBookByUsers($arrBooks);

$sth = null;
$dbh = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма#33</title>
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

        .width {
            width: 80%;
        }

        .del {
            position: relative;
            float: right;
            top: -30px;
            right: 40px;
            cursor: pointer;
        }

    </style>
</head>
<body>
<div class="container">
    <table class="table table-striped table-bordered ">
        <caption>Пользователи прочитавшие книги</caption>
        <tr class="text-center table-info">
            <th scope="col">id</th>
            <th scope="col">Пользователь</th>
            <th scope="col">Адрес пользователя</th>
            <th scope="col">Книга</th>
        </tr>
        <?php foreach ($arrUsres as $usres): ?>
            <tr class=''>
                <td><?= $usres['id'] ?></td>
                <td><?= $usres['fio'] ?></td>
                <td><?= $usres['adres'] ?></td>
                <td><?= $bookByUsers[$usres['id']] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<div class="page container ">
    <h2 class="">Добавление товара</h2>
    <hr>
    <form action="" method="post" class=' ' id="form">
        <div class="form-group form ">
            <label for="product">ФИО</label>
            <input type="text" name="fio" id="fio" value="" class="form-control">
        </div>
        <div class="form-group form">
            <label for="adres">Адрес</label>
            <input type="text" name="adres" id="adres" value="" class="form-control">
        </div>
        <div class="form-group form">
            <label for="boock">Прочитаная книга</label>
            <input type="text" name="boock[]" id="boock" value="" class="form-control">
        </div>
        <input type="button" value="добавить книгу" class="btn btn-primary" id="btn">
        <input type="submit" value="отправить  " name="submit" class="btn btn-success">
    </form>
</div>
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top:0;">Вернуться к списку заданий</a>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark mt-5 container">
    <div class="col-md-6 px-0">
        <span>Создать форму с неограниченной возможностью добавления инпутов.
            Пример:
            ФИО
            Адрес
            Названия книг, что прочитали (и тут должна быть кнопка добавить еще)

            Что-то вроде этого:
             !Untitled.png|thumbnail!

            Количество добавлений не ограничено.

            Так же для каждой добавленной строки — должна быть иконка удалить с работающим функционалом.
            Засабмитить эту форму.
            Придумать структуру БД для хранения такой информации.
            Сохранить форму в БД.
        </span>
    </div>
</div>

<script>
    $("#btn").on('click', foo2);

    function foo2(argument) {
        $(`<div class="form-group form">
				<input type="text" name="boock[]" value="" class="form-control width">
				<span class='del' onclick='delet(this)'>X</span>
			</div>`).insertAfter($("#form>div").last())
    }

    function delet(event) {
        $(event).parent().remove();
    }
</script>
</body>
</html>
