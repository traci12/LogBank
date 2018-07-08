
[
<?php

// Create connection
include('connection.php');
session_start();
$my_office=$_SESSION['office'];
$result=mysqli_query($con,"SELECT * from lb_dtrstaff join lb_userinfo ON lb_dtrstaff.user_id = lb_userinfo.user_id join lb_user on lb_userinfo.user_id = lb_user.user_id  join lb_usertype on lb_usertype.user_type_id = lb_user.user_type_id join lb_office on lb_office.office_id = lb_userinfo.office  where lb_user.is_active = 1  and lb_userinfo.office='$my_office'");
$lastrow=mysqli_num_rows($result);
$firstrow=0;
    while($row = mysqli_fetch_array($result)) {
        $office_id='"'.$row['dtr_date'].'",';
        $office_id='"name":'.$office_id;
        $office_code='"'.$row['fname']." ".$row['lname'].'",';
        $office_code='"position":'.$office_code;
        $office_desc='"'.$row['office_desc'].'",';
        $office_desc='"office":'.$office_desc;
        $room_no='"'.$row['dtr_timein'].'",';
        $room_no='"extn":'.$room_no;
        $building='"'.$row['dtr_timeout'].'"';
        $building='"start_date":'.$building;

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