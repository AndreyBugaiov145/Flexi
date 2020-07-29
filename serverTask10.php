<?php
	//масив тайм зон
	$arrayTimeZone = array("Asia/Tokyo","Asia/Hong_Kong","Europe/Moscow","Europe/Kiev","	Europe/Minsk","Europe/Paris","Europe/Riga","Europe/Rome","Europe/Berlin","Europe/Lisbon");
	//получение тела fetch  запроса
	$exploded =json_decode(file_get_contents('php://input'));
	$el = $exploded->check;
	//yfpyfxtybt nfqv pjys
	date_default_timezone_set($arrayTimeZone[$el]);
	echo date("H:i:s",time() );

?>