<?php
	require 'config.php';
	$dbh = new PDO("mysql:host=$host;dbname=$bd;charset=UTF8", "$login", "$password");
	$results =$dbh->query("SELECT * FROM `task16` WHERE DATE_FORMAT(date, '%m%d')<=DATE_FORMAT(DATE_ADD(NOW(), INTERVAL 10 DAY),'%m%d') ORDER BY DATE_FORMAT(date, '%m%d') ");
  $results = $results->fetchAll(PDO::FETCH_ASSOC);
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
  <?if($results):?>
  <div class="container">
    <table  class='table table-striped table-bordered '>
      <tr class='text-center table-info'>
        <th  scope='col'>id</th>
          <th  scope='col'>Имя</th>
          <th  scope='col'>Дата рождения</th>
        </tr>
        <?foreach ($results as $value):?>
        <tr class=''><td><?=$value['id']?></td>
        <td> <?=$value['name']?></td><td> <?=$value['date']?></td></tr>
        <?endforeach;?>
    <table >
  </div>
  <?endif;?>

</body>
</body>
</html>
