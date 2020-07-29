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
		<form action="" method="post" class="form1">
			<label for="name">Введите ваше имя</label><input type="text" name="name" id="name"><br>
			<label for="password">Введите пароль</label><input type="password" name="password" id="password">
			<input type="submit" name="submit">
		</form>
		<?php if($_POST["submit"]):?>
			<div>
				<span>Ваше имя : <?=$_POST["name"]?></span>
				<br>
				<span>Ваш пороль : <?=$_POST["password"]?></span>
			</div>
		<?php endif;?>
	</div>
</body>
</html>