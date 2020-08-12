<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Аккордеон</title>
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
		let el = document.querySelectorAll(".page");
		el.forEach((e)=>{
			e.addEventListener("click",foo,false);
		});
		function foo(event) {
			el.forEach((e)=>{
				e.lastElementChild.classList.add("hide");
			});
			this.lastElementChild.classList.remove("hide");
			console.log(this.sibling);
		}
	</script>
</body>
</html>