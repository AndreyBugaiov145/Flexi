<?PHP 
require 'config.php';

if (isset($_POST["submit"])) {
	$text = htmlspecialchars($_POST["text"]);
	$dbh = new PDO("mysql:host=$host;dbname=$bd;charset=UTF8", "$login", "$password");
	$sth=$dbh->prepare("INSERT INTO `task19`(`some_text`) VALUES (:some_text)");
	$sth->execute(array('some_text'=>$text));
	$dbh = null;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TASK19</title>
</head>
<body>
	<span></span>

	<form action="" method="post">
		<input type="text" name="text">
		<input type="submit" name="submit">
	</form>
</body>
</html>