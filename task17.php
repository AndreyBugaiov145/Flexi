<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task17</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<style>
			form{
				margin: 20px;
				padding: 5px;
			}
			.d{
				float: left;
				margin: 10px;
				border-bottom: 2px solid silver;
			}
		</style>
</head>
<body>
	<div class="container">
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
		<label > Добавить файл<input type="file" name="file" ></label>
		<input type="submit" name="submit" class="btn btn-primary" value="отправить">
	</form>	
<?php
	if(isset($_POST['submit'])){
		if(isset($_FILES['file'])){
			$load = "load";
			$file_name = $_FILES['file']["name"];
			$file_tmp = $_FILES['file']["tmp_name"];
			$file_type = $_FILES['file']["type"];
			move_uploaded_file($file_tmp, "$load/$file_name");
			
		    
		}
	}
	$dir = "load/"; 
	    if(is_dir($dir)) {   
	    	$type= array('jpg','png','jpeg');
	         $files = scandir($dir);   
	         array_shift($files); 
	         array_shift($files); 
	         for($i=0; $i<sizeof($files); $i++){
	         	if ((explode(".",$dir.$files[$i] ))[1] === $type[0]||(explode(".",$dir.$files[$i]))[1] === $type[1]||(explode(".",$dir.$files[$i]))[1] === $type[2]) {
					echo "<div class='d'><img style='width:300px,height:300px' src='{$dir}{$files[$i]}'></div><br>";
				}else{
					echo "<div class='d'><a href='{$dir}{$files[$i]}' download>Скачать файл</a></div><br>";	
		         }
		    } 
		} else echo $dir.' -такой директории нет;<br>';
	?>
	</div>
</body>
</html>