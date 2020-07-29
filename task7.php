<?php
function FunctionName()
{	
	$rez =true;
	$type=null;
	$args = func_get_args ();

	//проходимся по массиву аргументов и проверяем типп данных
	foreach ($args as $val ) {
	$type = $type?$type : gettype($val);
	$rez = ($type===gettype($val)&&$rez)?true :false;
	}
	// выводим результат
	if($rez){
		return "Все хорошо типы данных совпадают";
	}else{
		foreach ($args as $val ) {
			$val.="";
		}
		return " Ошибка .Типы данных были приведены к строчному типу ";
	}
}
echo(FunctionName(15,"15",87));
?>