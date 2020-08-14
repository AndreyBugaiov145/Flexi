<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	  <style>
		*{
			margin: 0;
			padding: 0;
		}
		.page{
			position: relative;
			margin: 0 auto;
			width: 500px;
			background-color: silver;
			padding: 10px;
			border-radius: 10px;
			margin-top: 7%;
		}
	</style>
</head>
<body>
	<div class="page">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form1">
			<div class="form-group form ">
			<label for="name">Введите ваше имя</label><input class="form-control" type="text" name="name" id="name">
			</div>
			<div class="form-group form ">
			<label for="password">Введите пароль</label><input class="form-control" type="password" name="password" id="password">
			</div>
			<span>Отметь свой skill</span>	
			<div class="form-check ">			
			<input class="form-check-input" type="checkbox"  name="checkbox[]" value="Css" id="Css">
			<label for="password">Css</label>
			</div>
			<div class="form-check ">
			<input class="form-check-input" type="checkbox" name="checkbox[]"  value="JS" id="JS">
			<label for="JS">JS</label>
			</div>
			<div class="form-check ">
			<input class="form-check-input" type="checkbox" name="checkbox[]"  value="PHP" id="PHP">
			<label for="PHP">PHP</label>
			</div>
			<span>Выбери пол</span>
			<div class="form-group form ">
			<select class="form-control" name="select" id="select">
				<option value="Мужской">Мужской</option>
				<option value="Женский">Женский</option>
			</select>
			</div>
			<input type="submit" name="submit">
		</form>
		<br><hr><br>
		<?php if(isset($_POST["submit"])):?>
			<div>
				<span>Ваше имя : <?=$_POST["name"]?></span><br>
				
				<span>Ваш пороль : <?=$_POST["password"]?></span><br>
				<span>Ваш Skill : <? foreach ($_POST["checkbox"] as $key => $value) {
					if($key==0){echo $value;}
					else echo " ,".$value;
				}?></span><br>
				<span>Ваш пол : <?=$_POST["select"]?></span>
			</div>
		<?php endif;?>
	</div> 
</body>

</html>