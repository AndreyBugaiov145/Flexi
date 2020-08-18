<?php

$ch = curl_init('http://3.testsite.co.ua//task32Api.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, ['id'=>"1"]);
$html = curl_exec($ch);
curl_close($ch);
echo $html;
?>