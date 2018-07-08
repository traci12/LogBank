<?php
$uid=$_GET['uid'];
$time=$_GET['time'];
$date=$_GET['date'];

mysql_query("INSERT INTO lb_dtrstaff(dtr_date,user_id,dtr_timein,is_archived) VALUES('$date','$uid','$time',0)");


$q=mysql_query("SELECT * FROM lb_userinfo WHERE user_id='$uid'");
$rw=mysql_fetch_array($q);
echo"<h1><center>WELCOME ".$rw['fname']. "!</center></h1>";
?>
<html>
  <head>
    <script src="speakClient.js"></script>
		<script>
	setTimeout("window.location.href='attendance';", 6000);</script>
  </head>
  <body onLoad="speak('Welcome <?php echo $rw['fname'];?>')">
    <div id="audio"></div>
  </body>
</html>

