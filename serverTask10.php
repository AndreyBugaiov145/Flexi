<?php
	$arrayTimeZone = array("Asia/Tokyo","Asia/Hong_Kong","Europe/Moscow","Europe/Kiev","	Europe/Minsk","Europe/Paris","Europe/Riga","Europe/Rome","Europe/Berlin","Europe/Lisbon");

	$exploded =json_decode(file_get_contents('php://input'));
	$el = $exploded->check;

	date_default_timezone_set($arrayTimeZone[$el]);
	echo date("H:i:s",time() );

?>