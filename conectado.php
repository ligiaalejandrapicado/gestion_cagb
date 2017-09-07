<?php define("dbName","ad_control");
define("dbUser","root"); 
define("dbHost","localhost"); 
define("dbPassw","123456");
$DB = mysql_connect(dbHost, dbUser, dbPassw) or die(mysql_error());
mysql_select_db(dbName); ?>
