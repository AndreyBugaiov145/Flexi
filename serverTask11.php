<?php
	if(!is_numeric($_POST["firstNamber"])|| !is_numeric($_POST["secondNamber"]))
	{
		echo "Вы ввели ошибочные данные";
		return  ;
	}
	switch ($_POST["select"]) {
		case 1:	echo $_POST["firstNamber"] +$_POST["secondNamber"] ; break;
		case 2:	echo $_POST["firstNamber"] -$_POST["secondNamber"] ; break;
		case 3:	echo $_POST["firstNamber"] *$_POST["secondNamber"] ; break;
		default:
			echo $_POST["firstNamber"] /$_POST["secondNamber"];	break;
	}

?>