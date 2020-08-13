<?php
if (isset($_POST['submit'])) {
	if(empty($_POST['matrix1'])||empty($_POST['matrix1'])){
		echo "ошибка ввода <a href='task28.php'>попробовать снова<a>";
		exit();
	}
	$mass1 =  explode("\n",$_POST['matrix1']);
	$mass2 = explode("\n",$_POST['matrix2']);

	$lengthMass = count($mass1)>count($mass2)?count($mass1):count($mass2);

	$matrix1=[];
	$matrix2=[];
	$count=0;
	$rezaltMass=[];

	foreach ($mass1 as $value ) {
		$matrix1[]=explode(" ",$value);
		$count= $count>count(explode(" ",$value))?$count:count(explode(" ",$value));
	}

	foreach ($mass2 as $value ) {
		$matrix2[]=explode(" ",$value);
		$count= $count>count(explode(" ",$value))?$count:count(explode(" ",$value));
	}

	//echo "lengthMass = $lengthMass ||| count = $count<br><br>";
	for ($i=0; $i <$lengthMass ; $i++) { 
		for ($j=0; $j <$count ; $j++) { 
			$matrix1[$i][$j] = isset($matrix1[$i][$j])?$matrix1[$i][$j]:0;
			$matrix2[$i][$j] = isset($matrix2[$i][$j])?$matrix2[$i][$j]:0;
			$rezaltMass[$i][$j] = $matrix1[$i][$j]+$matrix2[$i][$j];
		}
		$rezaltMass[$i] = implode(" ", $rezaltMass[$i]);
	}
	foreach($mass1 as $v){
		echo "$v<br>";
	}
	echo "+<br>";
	foreach($mass2 as $v){
		echo "$v<br>";
	}
	echo "=<br>";
	foreach($rezaltMass as $v){
		echo "$v<br>";
	}

}


?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<textarea name="matrix1" id="matrix1" cols="30" rows="10"></textarea>
		<textarea name="matrix2" id="matrix2" cols="30" rows="10"></textarea>
		<input type="submit" name="submit">
	</form>
	<script>
	</script>
</body>
</html>