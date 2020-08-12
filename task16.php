<?php
if (isset($_GET['submit'])){
  require 'config.php';
  $date_from = $_GET['date_from'];
  $date_to = $_GET['date_to'];

  if($date_from>$date_to){
    echo "неверный выбор даты<a href='task16.php'> попробовать снова<a>";
    exit;
  }
  $misqli = new mysqli($host, $login ,$password,$bd );
  $misqli->query("SET NAMES 'utf8'");

  $sucses = $misqli->query("SELECT `name` , `date` FROM `task16` WHERE DATE_FORMAT(date, '%m-%d') > '{$date_from}' AND DATE_FORMAT(date, '%m-%d') < '{$date_to}' ORDER BY `date` "); 

	function get($ar)
		{	$arr = array();
			while(($row = $ar->fetch_assoc())!=false){
				$arr[] = $row;
			}
			return $arr;
		}
	$arr =get($sucses);
  foreach ($arr as  $value){
    echo "Имя --".$value['name']."//   Датa рождения = ".$value['date']."<br/>";
  }
 
	$misqli->close();
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Datepicker </title>
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
  <style>
    .ui-datepicker-year{
       display:none;   
      }
  </style>
  <script>
    $( function() {
    $( "#date_from" ).datepicker({
        dateFormat: 'mm-dd',
        changeYear: false 
    });
     $( "#date_to" ).datepicker({
        dateFormat: 'mm-dd',
        changeYear: false 
    });
  });  
  
  </script> 
</head>
<body>
 <form action="" method="get">
 	<p>Date: <input type="text" id="date_from" name="date_from" ></p>
 	<p>Date: <input type="text" id="date_to" name="date_to"></p>
 	<input type="submit" name="submit">
 </form>

 
</body>
</html>