<?php
include('/ci/application/views/db.php');
session_start();
$uid=$_SESSION['login_user'];

/*
if (isset($uid)) {
	
    if (time() - $uid > 1800) {
        // last request was more than 30 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
    } else if (time() - $uid > 6) {
        $uid = time(); // update last activity time stamp
    }
print_r(gmDate('s', time() - $_SESSION["LAST_ACTIVITY"]));

$timeout = 0;
}*/
$ses_sql=mysql_query("select * from lb_user where user_id='$uid' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['username'];
$ut=$row['user_type_id'];

$u=mysql_fetch_array(mysql_query("SELECT * FROM lb_userinfo WHERE user_id='$uid'"));
$o=$u['office'];
$email=$u['email'];
if(!isset($login_session))
{
header("Location: index.php");
}

?>
<?php
/*session_start();
$timestamp = time();
$diff = 1200; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.

//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
$hld_diff = $diff;
if(isset($_SESSION['ts'])) {
	$slice = ($timestamp - $_SESSION['ts']);	
	$diff = $diff - $slice;
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
	$diff = $hld_diff;
	$_SESSION['ts'] = $timestamp;
}

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; //$diff holds seconds less than 3600 (1 hour);

$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;
 */

?>
<!-- <div id="strclock">Clock Here!</div>
<script type="text/javascript">
 var hour = <?php echo floor($hours); ?>;
 var min = <?php echo floor($minutes); ?>;
 var sec = <?php echo floor($seconds); ?>

function countdown() {
 if(sec <= 0 && min > 0) {
  sec = 59;
  min -= 1
 }
 else if(min <= 0 && sec <= 0) {
  min = 0;
  sec = 0;
 }
 else {
  sec -= 1;
 }
 
 if(min <= 0 && hour > 0) {
  min = 59;
  hour -= 1;
 }
 
 var pat = /^[0-9]{1}$/;
 sec = (pat.test(sec) == true) ? '0'+sec : sec;
 min = (pat.test(min) == true) ? '0'+min : min;
 hour = (pat.test(hour) == true) ? '0'+hour : hour;
 
 document.getElementById('strclock').innerHTML = hour+":"+min+":"+sec;
 setTimeout("countdown()",1000);
 }
 countdown();
</script> -->



