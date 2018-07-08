
[
<?php

include('connection.php');
$result=mysqli_query($con,"SELECT * FROM lb_dtrstaff JOIN lb_userinfo ON lb_dtrstaff.user_id = lb_userinfo.user_id JOIN lb_office ON lb_userinfo.office = lb_office.office_id WHERE lb_dtrstaff.is_archived=0 ORDER BY dtr_date ASC ");
//$result = mysqli_query($con,"SELECT * FROM lb_office");
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
        $building='"'.$row['dtr_timeout'].'",';
        $building='"start_date":'.$building;
        $dtr_id=$row['dtr_id'];
        if($row['dtr_timeout']==NULL)
            $is_archived='"'."<a href='dtr_record/timeoutRecord/$dtr_id'><img src='./Resources/images/Time.png' width=20 height=20 class='icon16 fl-space2' alt='' title='Timeout'></a><a href='dtr_record/deleteRecord/$dtr_id' ><img src='./Resources/images/ico_delete_16.png' class='icon16 fl-space2' alt='' title='delete'></a>".'"';
        else
            $is_archived='"'."<a href='dtr_record/deleteRecord/$dtr_id' ><img src='./Resources/images/ico_delete_16.png' class='icon16 fl-space2' alt='' title='delete'></a>".'"';
        $is_archived='"salary":'.$is_archived;   

        $firstrow++;
        if($firstrow==$lastrow) {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;
            echo $room_no;
            echo $building;
            echo $is_archived;

            echo '}';
        }
        else {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;
            echo $room_no;
            echo $building;
            echo $is_archived;

            echo '},';
        }
        }
?>
]