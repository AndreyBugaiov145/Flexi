<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div{
			margin: 0 auto;
			background-color: silver;
			border-radius: 15px;
			padding: 10px;
			width: 200px;
		}
		label{
			font-size: 1.3em;
			padding-left: 40px;
		}
		
		.inpute{
			position: absolute;
			width: 0px;
			height: 0px;
			overflow: hidden;
		}
		.inpute:checked+span{
			background: url(svg/iconmonstr-handshake-6.svg) no-repeat green;
			background-size: 30px;
		}
		.inpute:checked:disabled+span{
			background: url(svg/iconmonstr-handshake-9.svg) no-repeat green;
			background-size: 30px;
		}
		.inpute:disabled+span{
			background: url(svg/iconmonstr-handshake-9.svg) no-repeat #fff;
			background-size: 30px;
		}
		span{
			position: relative;
			top:-25px;
			background: url(svg/iconmonstr-handshake-2.svg) no-repeat #fff;
			background-size: 30px;
			width: 30px;
			height: 30px;
			overflow: hidden;
			color:red;
			display: block;
			border-radius: 50%;
		}
	</style>
</head>
<body>
	<div>
		<form action="" method="">
			<label ><input type="checkbox" class="inpute">Первый <span class="check-box"></span></label>
			<label ><input type="checkbox" class="inpute" checked="checked">Второй<span class="check-box"></span></label>
			<label ><input type="checkbox" class="inpute"disabled="disabled" checked="checked">Третий <span class="check-box"></span></label>
			<label ><input type="checkbox" class="inpute" disabled="disabled">Четвертый<span class="check-box"></span></label>
		</form>
	</div>
</body>
</html>