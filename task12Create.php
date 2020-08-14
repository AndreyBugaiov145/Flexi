<?php
require 'config.php';
require 'bdConect.php';


$arr = $dbh->query("SELECT * FROM `users`"); 

if (isset($_POST['submit'])) {
	if(empty($_POST['product'])||empty($_POST['price'])||empty($_POST['short_description'])){
		echo "<h3 style='color:red'>ОШИБКА.Заполните все поля</h3>";

	}else{	
		$dbh->query("INSERT INTO `Product`(`product`, `price`, `short_description`, `userId`) VALUES ('{$_POST['product']}','{$_POST['price']}','{$_POST['short_description']}','{$_POST['select']}')"); 
		
		$dbh = null;
		header("location: task12.php");
	}

}
$dbh = null;

	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Редактирование товара</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		.page{
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
	<div class="page ">
		<h2 class="">Добавление товара</h2><hr>
		<form action="<? $_SERVER['PHP_SELF'] ?>" method="post" class=' '>
			<div class="form-group form ">
				<label for="product">Введите новаое название продута</label>
				<input type="text" name="product" id="product" value=""class="form-control">
			</div>
			<div class="form-group form">	
				<label for="price">Введите новаую цену продута</label>
				<input type="number" name="price" id="price" value="" class="form-control">
			</div>

			<div class="form-group form">
				<label for="">Выбериет владельца продукта</label>
				<select name="select" id="select" class="form-control form-control-sm">
					<?php foreach($arr as $val):?>
						<option value="<? echo $val['id']?>"><? echo $val['name']?></option>
					<?php endforeach;?>
				</select>
			</div>
			<div class="form-group form">	
				<label for="short_description">Введите краткое описане</label>
				<textarea name="short_description" id="short_description" cols="50" rows="8" class="form-control"></textarea>
			</div>
			<input type="submit" value="создать " name="submit" class="btn btn-success">
			<a href="task12.php"><input type="button" value="Отмена" class="btn btn-danger"></a>
		</form>
	</div>
</body>
</html>
