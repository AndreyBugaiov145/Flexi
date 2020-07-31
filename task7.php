<?php
function FunctionName()
{	
	$rez =true;
	$type=null;
	$args = func_get_args ();
	$ansver;

	foreach ($args as $val ) {
	$type = $type?$type : gettype($val);
	$rez = ($type===gettype($val)&&$rez)?true :false;
	}

	if($rez){
		$ansver="Все хорошо типы данных совпадают<br>";
	}else{
		for ($i=0; $i < count($args); $i++) { 
			//$args[$i] .="";
			$args[$i]=strval($args[$i]);
		}
		$ansver= "Ошибка .Типы данных были приведены к строчному типу<br>";
	}
	return $ansver.$args;
}
var_dump(FunctionName(15,"2",87));

?>