
[
<?php

include('connection.php');
$result=mysqli_query($con,"SELECT * from lb_visit_trans JOIN lb_office ON lb_office.office_id = lb_visit_trans.office_id JOIN lb_userinfo ON lb_userinfo.user_id = lb_visit_trans.staff_id WHERE lb_visit_trans.is_archived=0 ");
//$result = mysqli_query($con,"SELECT * FROM lb_office");
$lastrow=mysqli_num_rows($result);
$firstrow=0;
    while($row = mysqli_fetch_array($result)) {
        $date='"'.$row['vt_date'].'",';
        $date='"date":'.$date;
        $name='"'.$row['fname']." ".$row['lname'].'",';
        $name='"name":'.$name;
        $office='"'.$row['office_desc'].'",';
        $office='"office":'.$office;
        $purpose='"'.$row['purpose'].'",';
        $purpose='"purpose":'.$purpose;
        $persontovisit='"'.$row['v_fname']." ".$row['v_lname'].'",';
        $persontovisit='"persontovisit":'.$persontovisit;
        $timein='"'.$row['vt_timein'].'",';
        $timein='"timein":'.$timein;
        $timeout='"'.$row['vt_timeout'].'",';
        $timeout='"timeout":'.$timeout;
        $vt_id=$row['vt_id'];
        if($row['vt_timeout']==NULL)
            $action='"'."<a href='v_log/timeoutRecord/$vt_id'><img src='./Resources/images/Time.png' width=20 height=20 class='icon16 fl-space2' alt='' title='Timeout'></a><a href='v_log/deleteRecord/$vt_id' ><img src='./Resources/images/ico_delete_16.png' class='icon16 fl-space2' alt='' title='delete'></a>".'"';
        else
            $action='"'."<a href='v_log/deleteRecord/$vt_id' ><img src='./Resources/images/ico_delete_16.png' class='icon16 fl-space2' alt='' title='delete'></a>".'"';
        $action='"action":'.$action;   

        $firstrow++;
        if($firstrow==$lastrow) {
            echo '{';

            echo $date;
            echo $name;
            echo $office;
            echo $purpose;
            echo $persontovisit;
            echo $timein;
            echo $timeout;
            echo $action;

            echo '}';
        }
        else {
            echo '{';

            echo $date;
            echo $name;
            echo $office;
            echo $purpose;
            echo $persontovisit;
            echo $timein;
            echo $timeout;
            echo $action;

            echo '},';
        }
        }
?>
]