
[
<?php

include('connection.php');
session_start();
$id=$_SESSION['uid'];
$result=mysqli_query($con,"SELECT * FROM lb_visit_trans WHERE staff_id='$id' ORDER BY vt_id DESC");
$lastrow=mysqli_num_rows($result);
$firstrow=0;
    while($row = mysqli_fetch_array($result)) {
    	

        $office_id='"'.$row['v_fname'].' '.$row['v_lname'].'",';
        $office_id='"name":'.$office_id;
        $office_code='"'.$row['purpose'].'",';
        $office_code='"position":'.$office_code;
        $office_desc='"'.$row['vt_timein'].'",';
        $office_desc='"office":'.$office_desc;
        $room_no='"'.$row['vt_timeout'].'",';
        $room_no='"extn":'.$room_no;   
        $building='"'.$row['vt_date'].'"';
        $building='"building":'.$building;   

        $firstrow++;
        if($firstrow==$lastrow) {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;
            echo $room_no;
            echo $building;

            echo '}';
        }
        else {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;
            echo $room_no;
            echo $building;

            echo '},';
        }
        }
?>
]