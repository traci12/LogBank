<?php

include("db.php");


$sth = mysql_query("select t.user_id, sum(t.hours) as h,sum(t.minutes) as m,sum(t.seconds) as s
from (select user_id, TIMEDIFF(dtr_timeout, dtr_timein) as duration, TIMESTAMPDIFF(hour,dtr_timein,dtr_timeout) as hours,
TIMESTAMPDIFF(minute,dtr_timein,dtr_timeout) mod 60 as minutes, TIMESTAMPDIFF(second,dtr_timein,dtr_timeout) mod 60 seconds
from lb_dtrstaff) as t where t.user_id = 20");

$row = mysql_fetch_row($sth);

print json_encode($row);

echo $row[1];
?>