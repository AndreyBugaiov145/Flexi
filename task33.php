<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Форма#33</title>
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
		.page2{
			position: relative;
			margin: 0 auto;
			width: 300px;
			background-color: silver;
			padding: 10px;
			border-radius: 10px;
			margin-top: 7%;
		}

		.width{
			width: 80%;
		}
		.del{
			position: relative;
			float: right;
			top:-30px;
			right: 40px;
			cursor: pointer;
		}

	</style>
</head>
<body>
	<div class="page ">
		<h2 class="">Добавление товара</h2><hr>
		<form action="serverTask33.php" method="post" class=' ' id="form">
			<div class="form-group form ">
				<label for="product">ФИО</label>
				<input type="text" name="fio" id="fio" value=""class="form-control">
			</div>
			<div class="form-group form">	
				<label for="adres">Адрес</label>
				<input type="text" name="adres" id="adres" value="" class="form-control">
			</div>
			<div class="form-group form">	
				<label for="boock">Прочитаная книга</label>
				<input type="text" name="boock[]" id="boock" value="" class="form-control">
			</div>
			<input type="button" value="добавить книгу" class="btn btn-primary" id="btn">
			<input type="submit"  value="отправить  " name="submit" class="btn btn-success">
		</form>
	</div>
	<script>
		$("#btn").on('click',foo2);
		function foo2(argument) {
			$(`<div class="form-group form">	
				<input type="text" name="boock[]" value="" class="form-control width">
				<span class='del' onclick='delet(this)'>X</span>
			</div>`).insertAfter($("#form>div").last())	
		}
		function delet(event) {
			$(event).parent().remove();
		}
	</script>
</body>
</html>
