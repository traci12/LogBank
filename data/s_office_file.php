
[
<?php

include('connection.php');
$result=mysqli_query($con,"select * from lb_office where is_archived = 0");
//$result = mysqli_query($con,"SELECT * FROM lb_office");
$lastrow=mysqli_num_rows($result);
$firstrow=0;
    while($row = mysqli_fetch_array($result)) {
        $office_id='"'.$row['building'].'",';
        $office_id='"name":'.$office_id;
        $office_code='"'.$row['office_code'].'",';
        $office_code='"position":'.$office_code;
        $office_desc='"'.$row['office_desc'].'",';
        $office_desc='"office":'.$office_desc;
        $room_no='"'.$row['room_no'].'",';
        $room_no='"extn":'.$room_no;
        $user_id=$row['office_id'];
        $is_archived='"'."<a href='e_office/getOffice/$user_id'><img src='./Resources/images/ico_edit_16.png' class='icon16 fl-space2' alt='' title='Edit'></a><a href='s_office/deleteOffice/$user_id' onclick='return confirm('This record will be deleted permanently! Are you sure you want to continue ?');'><img src='./Resources/images/ico_delete_16.png' class='icon16 fl-space2' alt='' title='delete'></a>".'"';
        $is_archived='"salary":'.$is_archived;   

        $firstrow++;
        if($firstrow==$lastrow) {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;
            echo $room_no;
            echo $is_archived;

            echo '}';
        }
        else {
            echo '{';

            echo $office_id;
            echo $office_code;
            echo $office_desc;
            echo $room_no;
            echo $is_archived;

            echo '},';
        }
        }
?>
]