<?php
$x=0;
$query  = "SELECT * FROM lb_bio";
$result = mysql_query($query);

while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
$q=mysql_query("SELECT * FROM lb_userinfo WHERE user_id='$row[user_id]'");
$rw=mysql_fetch_array($q);

$data[$x] = array($row['bio_code1'],$row['bio_code2'],$row['bio_code3'],$row['bio_code4'],$rw['fname'],$row['user_id'],$x);
    $x++;
}
echo json_encode($data);
?>
