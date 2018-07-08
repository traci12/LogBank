<?php
include('db.php');
$uid =$_GET['uid'];
mysql_query("UPDATE lb_currsession SET curr_datetime=NOW() WHERE user_id='$uid'");
?>
