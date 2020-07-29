<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Выпадающий список</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="tasks">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" id="formTime">
			<span>Выбери страну что бы узнать время</span>
			<select name="" id="">werW
				<option value="0">Япония</option>
				<option value="1">Китай</option>
				<option value="2">Россия</option>
				<option value="3">Украина</option>
				<option value="4">Белоруссия</option>
				<option value="5">Франция</option>
				<option value="6">Латвия</option>
				<option value="7">Итлия</option>
				<option value="8">Германия</option>
				<option value="9">Португалия</option>
			</select>
		</form>
	</div>
	<script>
		const el = document.getElementById("formTime");
		el.addEventListener('change',getTime,false);
		function getTime() {
			//Получам индекс страны
			let check = el.querySelector("select").value;
			headers= {'Content-Type': 'application/json'};
			//запрос на сервер
		fetch("serverTask10.php",{
			method:"POST",
			body:JSON.stringify({"check":check}),
			headers:headers
		}).then((respons)=>{
			return respons.text();
		}).then((r)=>{alert(r)});
		}
	</script>
</body>
</html>