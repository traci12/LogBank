
[
<?php

include('connection.php');
session_start();
$my_office=$_SESSION['office'];
$result=mysqli_query($con,"SELECT * from  lb_staff_act join lb_userinfo ON lb_staff_act.user_id=lb_userinfo.user_id WHERE lb_userinfo.office='$my_office' ");
$lastrow=mysqli_num_rows($result);
$firstrow=0;
    while($row = mysqli_fetch_array($result)) {
        $name='"'.$row['fname']." ". $row['lname'].'",';
        $name='"name":'.$name;
        $note='"'.preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $row['act_des']).'",';
        $note='"note":'.$note;
        $time='"'.$row['act_time'].'",';
        $time='"time":'.$time;
        $date='"'.$row['act_date'].'"';
        $date='"date":'.$date;       

        $firstrow++;
        if($firstrow==$lastrow) {
            echo '{';

            echo $name;
            echo $note;
            echo $time;
            echo $date;           

            echo '}';
        }
        else {
            echo '{';

            echo $name;
            echo $note;
            echo $time;
            echo $date; 
           
            echo '},';
        }
        }
?>
]