<?php
if (isset($_GET['submit'])){
  require 'config.php';
  $misqli = new mysqli($host, $login ,$password,$bd );
  $misqli->query("SET NAMES 'utf8'");
	$sucses = $misqli->query("SELECT `name` , `date` FROM `task16` WHERE  `date`>'{$_GET['date_from']}' AND `date`<'{$_GET['date_to']}'  "); 
	function get($ar)
		{	$arr = array();
			while(($row = $ar->fetch_assoc())!=false){
				$arr[] = $row;
			}
			return $arr;
		}
		$arr =get($sucses);
	foreach ($arr as  $value) {
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
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  	$( function() {
    $( "#date_from" ).datepicker({
        dateFormat: 'yy-mm-dd'
    });
     $( "#date_to" ).datepicker({
        dateFormat: 'yy-mm-dd'
    });
  });  
  
  </script>
</head>
<body>
 <form action="" method="get">
 	<p>Date: <input type="text" id="date_from" name="date_from" ></p>
 	<p>Date: <input type="text" id="date_to" name="date_to" ></p>
 	<input type="submit" name="submit">
 </form>

</span> 
 
</body>
</html>