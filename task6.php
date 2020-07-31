<?php
function getNumber($a,$b)
{	
	if($a>$b){
		if($a===0||$b===0){
			$rez = 10*abs($a-$b);
			return "первое число больше на {$rez}%";
		}
		return "первое число больше на ".($a/$b*100-100)."%";
	}else if($a === $b){
		return "число равны";
	}else{
		if($a===0||$b===0){
			$rez = 10*abs($a-$b);
			return "первое число больше на {$rez}%";
		}
		return "второе число больше на ".($b/$a*100-100)."%";
	}

}
echo getNumber(0,32);
?>