<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="tasks">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form1">
			<label for="name">Введите ваше имя</label><input type="text" name="name" id="name"><br>
			<label for="password">Введите пароль</label><input type="password" name="password" id="password">
			<input type="submit" name="submit"><br>
			<span>Отметь свой skill</span>		
			<label for="password">Css</label>
			<input type="checkbox"  name="checkbox[]" value="Css" id="Css">
			<label for="JS">JS</label>
			<input type="checkbox" name="checkbox[]"  value="JS" id="JS">
			<label for="PHP">PHP</label>
			<input type="checkbox" name="checkbox[]"  value="PHP" id="PHP"><br>
			<span>Выбери пол</span>
			<select name="select" id="select">
				<option value="Мужской">Мужской</option>
				<option value="Женский">Женский</option>
			</select>
		</form>
		<br><hr><br>
		<?php if(isset($_POST["submit"])):?>
			<div>
				<span>Ваше имя : <?=$_POST["name"]?></span>
				
				<span>Ваш пороль : <?=$_POST["password"]?></span>
				<span>Ваш Skill : <? foreach ($_POST["checkbox"] as $key => $value) {
					if($key==0){echo $value;}
					else echo " ,".$value;
				}?></span>
				<span>Ваш пол : <?=$_POST["select"]?></span>
			</div>
		<?php endif;?>
	</div>
</body>
</html>