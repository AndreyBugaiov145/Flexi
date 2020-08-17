<?PHP 
require 'config.php';
require 'bdConect.php';
if (isset($_POST["submit"])) {
	$text = htmlspecialchars($_POST["text"]);
	$sth=$dbh->prepare("INSERT INTO `task19`(`some_text`) VALUES (:some_text)");
	$r =$sth->execute(array('some_text'=>$text));
	$dbh = null;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TASK19</title>
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
		}}

	</style>
</head>
<body>
<div class="page">
	<form action="" method="post">
		<div class="form-group form">
		<input type="text" name="text" class="form-control">
	</div>
		<input type="submit" name="submit"  class="btn btn-success">
	</form>
</div>
</body>
</html>