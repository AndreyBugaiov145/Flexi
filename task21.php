<?php  
	require 'config.php';
	require 'bdConect.php';

	$arr = array(1,2,6,4);
	
	$placeholder = implode(',', array_fill(0, count($arr), '?'));

	$sth =$dbh->prepare("SELECT * FROM `task16` WHERE `id` IN($placeholder)");

	$sth->execute($arr);

	$row = $sth->fetchAll(PDO::FETCH_ASSOC);

	$sth = null;
	$dbh = null;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Datepicker </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<?if($row):?>
	<div class="container">
		<table  class='table table-striped table-bordered '>
			<tr class='text-center table-info'>
				<th  scope='col'>id</th>
		      <th  scope='col'>Имя</th>
		      <th  scope='col'>Дата рождения</th>
		    </tr>
		    <?foreach ($row as $value):?>
		    <tr class=''><td><?=$value['id']?></td>
		    <td> <?=$value['name']?></td><td> <?=$value['date']?></td></tr>
		    <?endforeach;?>
		<table >
	</div>
	<?endif;?>

</body>
</body>
</html>