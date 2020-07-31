<?php
$misqli = new mysqli("localhost" , "root" ,"flexi140","tasks");
$misqli->query("SET NAMES 'utf8'");

$sucses = $misqli->query("SELECT * FROM `users`"); 
function get($ar)
{	
	$arr = array();
	while(($row = $ar->fetch_assoc())!=false){
		$arr[] = $row;
	}
	return $arr;
}

$arr =get($sucses);


if (isset($_POST['submit'])) {
	if(empty($_POST['product'])||empty($_POST['price'])||empty($_POST['short_description'])){
		echo "<h3 style='color:red'>ОШИБКА.Заполните все поля</h3>";

	}else{	
		$w =$misqli->query("INSERT INTO `Product`(`product`, `price`, `short_description`, `userId`) VALUES ('{$_POST['product']}','{$_POST['price']}','{$_POST['short_description']}','{$_POST['select']}')"); 
		
		$misqli->close();
		header("location: task12.php");
	}

}
$misqli->close();

	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Редактирование товара</title>
	<style>
		.page{
			margin: 0 auto;
			width: 700px;
			background-color: silver;
			padding: 10px;
			border-radius: 10px;
		}
		input,label{
			padding: 4px;
			margin: 10px;
		}
		select,textarea{
			margin-left: 13px;
		}
	</style>
</head>
<body>
	<div class="page">
		<h2>Обновить данные товара</h2>
		<form action="<? $_SERVER['PHP_SELF'] ?>" method="post">
			<label for="product">Введите новаое название продута</label><br>
			<input type="text" name="product" id="product" value=""><br>
			<label for="price">Введите новаую цену продута</label><br>
			<input type="number" name="price" id="price" value=""><br>
			<label for="">Выбериет владельца продукта</label><br>
			<select name="select" id="select">
				<?php foreach($arr as $val):?>
					<option value="<? echo $val['id']?>"><? echo $val['name']?></option>
				<?php endforeach;?>
			</select><br><br>
			<label for="short_description">Введите краткое описане</label><br>
			<textarea name="short_description" id="short_description" cols="30" rows="10"></textarea>
			<input type="submit" value="создать " name="submit">
			<a href="task12.php"><input type="button" value="Отмена "></a>
		</form>
	</div>
</body>
</html>