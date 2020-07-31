<?php
	$misqli = new mysqli("localhost" , "root" ,"flexi140","tasks");
	$misqli->query("SET NAMES 'utf8'");

		$sucses = $misqli->query("SELECT * FROM `Product` ORDER BY product "); 
		function get($ar)
		{	$arr = array();
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
	<title>Document</title>
	<style>
		button{
			background-color: green;
			padding: 5px;
			margin-top: 10px;
			border-radius: 10px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<table border="1">
		<caption>Таблица товаров</caption>
		<tr>
			<th>Название товара</th>
			<th>Цена</th>
			<th>Описание</th>
			<th>Удаление товара</th>
			<th>Изменить товара</th>
		</tr>
		<?php foreach ($arr as $value): ?>
			<tr>
				<td><?php echo $value['product']?></td>
				<td><?php echo $value['price']?></td>
				<td><?php echo $value['short_description']?></td>
				<td><a href="serverTask12.php" onclick="goo(<?php echo $value['id']?>,'delet')">Удалить</a></td>
				<td><a href="task12Update.php" onclick="goo(<?php echo $value['id']?>,'update')">Редактировать</a></td>

			</tr>
		<?php endforeach;?>
	</table>
	<a href="task12Create.php"><button>Добавить товар</button></a>
	<script>
		function goo(id,type) {
			headers= {'Content-Type': 'application/json'};
			document.cookie = `id=${id}`;
			document.cookie = `type=${type}`;
		}
	</script>
	
</body>
</html>