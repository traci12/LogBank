
[
<?php

include('connection.php');
session_start();
$id=$_SESSION['uid'];
$result=mysqli_query($con,"SELECT *, (TIME_TO_SEC(dtr_timeout) - TIME_TO_SEC(dtr_timein)) AS seconds, (TIME_TO_SEC(dtr_timein)) as timein, (TIME_TO_SEC(dtr_timeout)) as timeout from lb_dtrstaff WHERE is_archived=0 AND user_id='$id' ORDER BY dtr_id DESC");

$lastrow=mysqli_num_rows($result);
$firstrow=0;
    while($row = mysqli_fetch_array($result)) {
    	if ($row['timein'] < 43200 && $row['timeout'] > 43200)
        {
        $total_time_convert = $row['seconds'] - 3600;
        $total_time = gmdate("H:i:s", $row['seconds']);
        }
        else
        $total_time = gmdate("H:i:s", $row['seconds']);  

        $office_id='"'.$row['dtr_date'].'",';
        $office_id='"name":'.$office_id;
        $office_code='"'.$row['dtr_timein'].'",';
        $office_code='"position":'.$office_code;
        $office_desc='"'.$row['dtr_timeout'].'",';
        $office_desc='"office":'.$office_desc;
        $room_no='"'.$total_time.'"';
        $room_no='"extn":'.$room_no;   

        $firstrow++;
        if($firstrow==$lastrow) {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;
            echo $room_no;
            

            echo '}';
        }
        else {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;
            echo $room_no;
            

            echo '},';
        }
        }
?>
]