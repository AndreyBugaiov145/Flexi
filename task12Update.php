<?php
require 'config.php';
$misqli = new mysqli($host, $login ,$password,$bd );
	$misqli->query("SET NAMES 'utf8'");

	$ar = $misqli->query("SELECT * FROM `Product` where `id` ={$_COOKIE["id"]}"); 
	$row = $ar->fetch_assoc();
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
		<form action="serverTask12Update.php" method="post">
			<label for="product">Введите новаое название продута</label><br>
			<input type="text" name="product" id="product" value="<?echo $row['product']?>"><br>
			<label for="price">Введите новаую цену продута</label><br>
			<input type="number" name="price" id="price" value="<? echo $row['price']?>"><br>
			<label for="">Выбериет владельца продукта</label><br>
			<select name="select" id="select">
				<?php foreach($arr as $val):?>
					<option value="<? echo $val['id']?>"  <?php if($row['userId'] ===$val['id']){echo "selected";}?>  > <? echo $val['name']?></option>
				<?php endforeach;?>
			</select><br><br>
			<label for="short_description">Введите краткое описане</label><br>
			<textarea name="short_description" id="short_description" cols="30" rows="10"><? echo $row['short_description']?></textarea>
			<input type="submit" value="Обновить ">
			<a href="task12.php"><input type="button" value="Отмена "></a>
		</form>
	</div>
</body>
</html>