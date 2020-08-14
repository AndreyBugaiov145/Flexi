<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Выпадающий список</title>
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
		<form action="<?php echo $_SERVER['PHP_SELF']?>" id="formTime">
			<span>Выбери страну что бы узнать время</span>
			<select name="" id="" class="form-control form-control-sm">
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