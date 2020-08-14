<?php
	require 'config.php';
	$dbh = new PDO("mysql:host=$host;dbname=$bd;charset=UTF8", "$login", "$password");
	$results =$dbh->query("SELECT * FROM `task16` WHERE DATE_FORMAT(date, '%m%d')<=DATE_FORMAT(DATE_ADD(NOW(), INTERVAL 10 DAY),'%m%d') ORDER BY DATE_FORMAT(date, '%m%d') ");
	echo "<table  class='table table-striped table-bordered '>";
  echo "<tr class='text-center table-info'>
  		<th  scope='col'>ID</th>
      <th  scope='col'>Имя</th>
      <th  scope='col'>Дата рождения</th>
    </tr>";
	foreach ($results as $r) {
	echo "<tr class=''><td>".$r['id']."</td><td>".$r['name']."</td><td>".$r['date']."</td></tr>";
}
echo "<table >";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Datepicker </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</body>
</html>
