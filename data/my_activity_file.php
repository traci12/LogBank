
[
<?php

include('connection.php');
session_start();
$id=$_SESSION['uid'];
$result=mysqli_query($con,"SELECT * from  lb_staff_act WHERE user_id='$id'");
//$result = mysqli_query($con,"SELECT * FROM lb_office");
$lastrow=mysqli_num_rows($result);
$firstrow=0;
    while($row = mysqli_fetch_array($result)) {
        $office_id='"'.preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $row['act_des']).'",';
        $office_id='"activity":'.$office_id;
        $office_code='"'.$row['act_time'].'",';
        $office_code='"time":'.$office_code;
        $office_desc='"'.$row['act_date'].'"';
        $office_desc='"date":'.$office_desc;

        $firstrow++;
        if($firstrow==$lastrow) {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;
           

            echo '}';
        }
        else {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;
           
            echo '},';
        }
        }
?>
]