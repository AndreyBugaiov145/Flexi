<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Аккордеон</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<style>
		.page{
			background-color: silver;
			border-radius: 5px;
			-width: 400px;
			padding: 10px;
			margin: 5px;
		}
		.hide{
			display: none;
		}

	</style>
</head>
<body>
	<div class="page">
		<span >Блок-1</span>
		<ul class="">
			<li>dsfsdfsd</li>
			<li>sdfsdfs</li>
			<li>sdfsdf</li>
			<li>sdfsdff</li>
		</ul>
	</div>
	<div class="page">
		<span >Блок-2</span>
		<ul class="hide ">
			<li>dsfsdfsd</li>
			<li>sdfsdfs</li>
			<li>sdfsdf</li>
			<li>sdfsdff</li>
		</ul>
	</div>
	<div class="page">
		<span >Блок-3</span>
		<ul class="hide ">
			<li>dsfsdfsd</li>
			<li>sdfsdfs</li>
			<li>sdfsdf</li>
			<li>sdfsdff</li>
		</ul>
	</div>
	<div class="page">
		<span >Блок-4</span>
		<ul class="hide ">
			<li>dsfsdfsd</li>
			<li>sdfsdfs</li>
			<li>sdfsdf</li>
			<li>sdfsdff</li>
		</ul>
	</div>
	<script>

		let e = $(".page").on('click',akardeon);
		function akardeon(e) {
			$(this).siblings().each(function (i,elem) {
				$(elem).children().last().slideUp(200);
			})
			$(this).children().last().slideDown(200);
		}

	</script>
</body>
</html>