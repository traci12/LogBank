<?php session_start(); ?>
<?php

$connection = mysql_connect ("localhost", "root", "m00dle");
if ($connection == false)
{
	echo mysql_errno().": ".mysql_error()."<BR>";
	exit;
}
mysql_select_db("logbank", $connection);

?>
