<?php
require 'config.php';
require 'bdConect.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$sth=$dbh->query("SELECT * FROM `task32` "); 
	$respons = $sth->fetchAll(PDO::FETCH_ASSOC);
	//echo json_encode($respons);
}else if($_SERVER['REQUEST_METHOD'] == 'POST'){
	echo $_POST['id'];
	$sth =$dbh->prepare("DELETE FROM `task32` WHERE `id` = :id");
	$sth->execute(['id'=>$_POST['id']]);
	echo 'запись была удалена';
}

$dbh = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<table  class="table table-striped table-bordered ">
		<caption>Таблица товаров</caption>
		<tr class="text-center table-info">
			<th  scope="col">Имя</th>
			<th  scope="col">Номер телефона</th>
			<th  scope="col">Удалить</th>
		</tr>
		<?php foreach ($respons as $value): ?>
			<tr class=''>
				<td><?php echo $value['name']?></td>
				<td><?php echo $value['number']?></td>
				<td><a href="serverTask12.php?<?php echo 'id='.$value['id']?>" class="confirm">Удалить</a></td>
			</tr>
		<?php endforeach;?>
	</table>
	<a href="task12Create.php"><button class="btn btn-success">Добавить товар</button></a>	
	</div>
</body>
</html>