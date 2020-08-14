<?php
date_default_timezone_set("Europe/Kiev");


if (isset($_GET['submit'])){

  require 'config.php';
  require 'bdConect.php';

  $date_from = date("m-d",strtotime($_GET['date_from']));
  $date_to =  date("m-d",strtotime($_GET['date_to']));
  if($date_from>$date_to){
    echo "неверный выбор даты<a href='task16.php'> попробовать снова<a>";
    exit;
  }

  $sucses = $dbh->query("SELECT `name` , `date` FROM `task16` WHERE DATE_FORMAT(date, '%m-%d') > '{$date_from}' AND DATE_FORMAT(date, '%m-%d') < '{$date_to}' ORDER BY `date` "); 

	$arr =$sucses->fetchAll(PDO::FETCH_ASSOC);


  echo "<table  class='table table-striped table-bordered '>";
  echo "<tr class='text-center table-info'>
      <th  scope='col'>Имя</th>
      <th  scope='col'>Дата рождения</th>
    </tr>";
  foreach ($arr as  $value){
    echo "<tr class=''><td>".$value['name']."</td><td>".$value['date']."</td></tr>";
  }
  echo "<table >";

	$dbh = null;
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Datepicker </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
  <style>
    /* .ui-datepicker-year{
       display:none;   
      } */
      .page{
        margin: 0 auto;
        width: 400px;
      }
  </style>
  <script>
    $( function() {
    $( "#date_from" ).datepicker({
        dateFormat: 'dd-mm-yy'
        //changeYear: false 
    });
     $( "#date_to" ).datepicker({
        dateFormat: 'dd-mm-yy'
        //changeYear: false 
    });
  });  
  
  </script> 
</head>
<body>
  <div class="page">
    <form action="" method="get">
      <div class="form-group form ">
        <p>Date: <input type="text" id="date_from" name="date_from"class="form-control" ></p>
      </div>
      <div class="form-group form ">
        <p>Date: <input type="text" id="date_to" name="date_to"class="form-control"></p>
      </div> 
      <input type="submit" name="submit" class="btn btn-primary" >
    </form>
 </div>

 
</body>
</html>