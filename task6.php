<?php
function getNumber($a,$b)
{	
	if($a>$b){
		return "первое число больше на ".($a/$b*100-100)."%";
	}else if($a === $b){
		return "число равны";
	}else{
		return "второе число больше на ".($b/$a*100-100)."%";
	}

}
echo getNumber(4,8);
?>