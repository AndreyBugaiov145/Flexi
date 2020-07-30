<?php
function FunctionName()
{	
	$rez =true;
	$type=null;
	$args = func_get_args ();

	foreach ($args as $val ) {
	$type = $type?$type : gettype($val);
	$rez = ($type===gettype($val)&&$rez)?true :false;
	}

	if($rez){
		echo "Все хорошо типы данных совпадают<br>";
	}else{
		for ($i=0; $i < count($args); $i++) { 
			//$args[$i] .="";
			$args[$i]=strval($args[$i]);
		}
		echo "Ошибка .Типы данных были приведены к строчному типу<br>";
	}
	return $args;
}
var_dump(FunctionName(15,"2",87));

?>