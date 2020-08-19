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

	if(!$rez){
		for ($i=0; $i < count($args); $i++) { 
			$args[$i]=strval($args[$i]);
		}
	}
	return $args;
}
var_dump(FunctionName(15,4,87));

?>