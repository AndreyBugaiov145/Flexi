
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Редактирование товара</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="js/jquery-3.4.0.js"></script>
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
	<div class="page ">
		<h2 class="">Создание записи</h2><hr>
		<form action="<? $_SERVER['PHP_SELF'] ?>" method="post" class=' '>
			<div class="form-group form ">
				<label for="name">Введите ваше имя<small>(не мение 5 символов)</small></label>
				<input type="text" name="name" id="name" value=""class="form-control">
			</div>
			<div class="form-group form">	
				<label for="number">Выбериет номер телефона</label>
				<input type="text" name="number" id="number" value="" class="form-control">
			</div>
			<input type="button" value="создать " name="submit" class="btn btn-success" id="btn">
		</form>
	</div>
	<script>
	
		$("#btn").on("click",foo);
		function foo(argument) {
			let data = {
				'name':$("[name=name]").val(),
				'number':$("[name=number]").val()
			}
			console.log(data)
			$.ajax({
			url :'serverTask32.php',
			type:'post',
			data:data,
			success:function function_name(d_data,status) {
				console.log(d_data);
				//let rez = $.parseJSON(d_data);
				//console.log(rez);
				},
			error:function (argument) { // вызовиться при ошибке запроса к серверу
				alert("Данные ввендены не корректно ")
				},
			dataType:"text"	,
			timeOut:1000, // время оидания ответа ,если больше выдаст ошибку
			crossDomain:true,// если обащаемся к серверу на другом домене 
			scriptCharset: "utf8" // указываем кодировку при обращаению к серверу на другом домене	
			});
		}
	</script>
</body>
</html>
