<?php
$mysql_hostname = "mag-219437.mysql.binero.se";
$mysql_user = "219437_mn71845";
$mysql_password = "apansson";
$mysql_database = "219437-mag";
$prefix = "";
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($mysql_database, $db) or die("Could not select database");
?>



