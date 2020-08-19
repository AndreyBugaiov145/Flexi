<?php
require 'config.php';
require 'bdConect.php';
	$r = $dbh->query("SELECT * FROM `Product` where `id` ={$_GET["id"]}"); 
	$row =$r->fetch(PDO::FETCH_ASSOC);
	$arr = $dbh->query("SELECT * FROM `users`"); 
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
		.textarea{
			text-indent: 0px;
		}

	</style>
</head>
<body>
	<div class="page container">
		<h2 class="">Обновить данные товара</h2><hr>
		<form action="serverTask12Update.php?<?php echo 'id='.$_GET['id']?>" method="post" class=' '>
			<div class="form-group form ">
				<label for="product">Введите новаое название продута</label>
				<input type="text" name="product" id="product" value="<?echo $row['product']?>"class="form-control">
			</div>
			<div class="form-group form">	
				<label for="price">Введите новаую цену продута</label>
				<input type="number" name="price" id="price" value="<? echo $row['price']?>" class="form-control">
			</div>
		
			<div class="form-group form">
				<label for="">Выбериет владельца продукта</label>
				<select name="select" id="select" class="form-control form-control-sm">
					<?php foreach($arr as $val):?>
					<option value="<? echo $val['id']?>"  <?php if($row['userId'] ===$val['id']){echo "selected";}?>  > <? echo $val['name']?></option>
				<?php endforeach;?>
				</select>
			</div>
			<div class="form-group form">	
				<label for="short_description">Введите краткое описане</label><br>
			<textarea class="form-control" name="short_description" id="short_description" cols="30" rows="7"><? echo $row['short_description']?></textarea>
			</div>
			<input type="submit" value="Обновить" name="submit" class="btn btn-success">
			<a href="task12.php"><input type="button" value="Отмена" class="btn btn-danger"></a>
		</form> 
</body>
</html>