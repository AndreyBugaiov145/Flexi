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
		</style>
</head>
<body>
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


		    $dir = "load/";   //задаём имя директории
		    if(is_dir($dir)) {   //проверяем наличие директории
		         echo $dir.' - директория существует;<br>'; 
		         $files = scandir($dir);    //сканируем (получаем массив файлов)
		         array_shift($files); // удаляем из массива '.'
		         array_shift($files); // удаляем из массива '..'
		         for($i=0; $i<sizeof($files); $i++) echo '-файл: <a href="'.$dir.$files[$i].'" title="открыть/скачать файл или страницу">'.$files[$i].'</a>;<br>';  //выводим все файлы
		    } 
		    else echo $dir.' -такой директории нет;<br>';

/*
			if ((explode("/",$file_type ))[0] === 'image') {
				echo "<img style='width:300px,height:300px' src='load/{$file_name}'>";
			}else{
				echo "<a href='load/{$file_name}' download>Скачать файл</a>";
			}*/
		}
	}
?>
</body>
</html>