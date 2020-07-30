<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Calc</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="tasks">
		<form action="serverTask11.php" method="post" >
			<input type="text" name="firstNamber">
			<input type="text" name="secondNamber">
			<span>Выбери операцию</span>
			<select name="select" id="select">
				<option value="1">+</option>
				<option value="2">-</option>
				<option value="3">*</option>
				<option value="4">/</option>
			</select>
			<input type="submit" value="посчитать" id="btn">
		</form>
	</div>
</body>
</html>