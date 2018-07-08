
[
<?php

include('connection.php');
$result=mysqli_query($con,"select * from lb_act_type join lb_office on lb_act_type.office_id = lb_office.office_id where lb_act_type.is_archived = 0");
//$result = mysqli_query($con,"SELECT * FROM lb_office");
$lastrow=mysqli_num_rows($result);
$firstrow=0;
    while($row = mysqli_fetch_array($result)) {
        if($row['time_code'] == 1)
        { $timecode = 'Anytime'; }
        else if($row['time_code'] == 2)
        { $timecode = 'Evening'; }
        else if($row['time_code'] == 3)
        { $timecode = 'Weekend'; }

        $office_id='"'.$timecode.'",';
        $office_id='"name":'.$office_id;
        $office_code='"'.$row['office_code'].'",';
        $office_code='"position":'.$office_code;
        $office_desc='"'.$row['inc_des'].'",';
        $office_desc='"office":'.$office_desc;
        $user_id=$row['inc_id'];
        $is_archived='"'."<a href='e_checklist/getChecklist/$user_id'><img src='./Resources/images/ico_edit_16.png' class='icon16 fl-space2' alt='' title='Edit'></a><a href='s_checklist/deleteChecklist/$user_id' onclick='return confirm('This record will be deleted permanently! Are you sure you want to continue ?');'><img src='./Resources/images/ico_delete_16.png' class='icon16 fl-space2' alt='' title='delete'></a>".'"';
        $is_archived='"salary":'.$is_archived;   

        $firstrow++;
        if($firstrow==$lastrow) {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;
            echo $is_archived;

            echo '}';
        }
        else {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;  
            echo $is_archived;

            echo '},';
        }
        }
?>
]