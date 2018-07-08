<?php
include('include/db.php');
$uid=$_GET['uid'];
$time=$_GET['time'];

mysql_query("UPDATE lb_dtrstaff SET dtr_timeout='$time' WHERE user_id='$uid' AND dtr_timeout=''");

$q=mysql_query("SELECT * FROM lb_userinfo WHERE user_id='$uid'");
$rw=mysql_fetch_array($q);
echo"<h1><center>GOODBYE ".$rw['fname']. "!</center></h1>";?>
<html>
  <head>
    <script src="speakClient.js"></script>
	<script>
	setTimeout("window.location.href='attendance.php';", 6000);</script>
  </head>
  <body onLoad="speak('Goodbye <?php echo $rw['fname'];?>')">
    <div id="audio"></div>
  </body>
</html>
