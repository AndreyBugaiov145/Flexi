<?php
date_default_timezone_set($_POST['TimeZone']);
echo date("H:i:s", time());
?>