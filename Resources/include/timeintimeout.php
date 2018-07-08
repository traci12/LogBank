<?php
session_start();
$uid=$_SESSION['uid'];
$date = date('Y-m-d');
$time = date('H:i:s');
$query=mysql_query("SELECT * FROM lb_dtrstaff WHERE user_id='$uid' AND is_archived=0");
$count=mysql_num_rows($query);
$row=mysql_fetch_array($query);
?>
<html>
<head>
<script type="text/javascript">

function timeIn(){
var uid="<?php echo $uid; ?>";
var date="<?php echo $date; ?>";
var time="<?php echo $time; ?>"
window.location="timein.php?uid="+uid+"&date="+date+"&time="+time;
}

function timeOut(){
var uid="<?php echo $uid; ?>";
var time="<?php echo $time; ?>"
window.location="timeout.php?uid="+uid+"&time="+time;
}
</script>
</head>
<body>
<?php
if($count>=1){
$q=mysql_query("SELECT * FROM lb_dtrstaff WHERE user_id='$uid' AND dtr_timeout='' AND is_archived=0");
$c=mysql_num_rows($q);

if($c==1){
?>
<!--<input type="button" value='TIME IN' onClick='timeIn();' disabled=true> &nbsp <input type="button" value='TIME OUT' onClick='timeOut();'>
-->
<script>
timeOut();
</script>

<?php

}else{
?>
<!--<input type="button" value='TIME IN' onClick='timeIn();' > &nbsp <input type="button" value='TIME OUT' onClick='timeOut();' disabled=true>
-->
<script>
timeIn();
</script>

<?php
}
}else{
?>
<script>
timeIn();
</script>
<!--
<input type="button" value='TIME IN' onClick='timeIn();'> &nbsp <input type="button" value='TIME OUT' onClick='timeOut();' disabled='true'>
-->
<?php
}
?>
</body>
</html>
