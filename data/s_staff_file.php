
[
<?php

include('connection.php');
$result=mysqli_query($con,"select * from lb_userinfo join lb_user on lb_userinfo.user_id = lb_user.user_id join lb_usertype on lb_usertype.user_type_id = lb_user.user_type_id join lb_office on lb_office.office_id = lb_userinfo.office where lb_user.is_active = 1 ");
//$result = mysqli_query($con,"SELECT * FROM lb_office");
$lastrow=mysqli_num_rows($result);
$firstrow=0;

    while($row = mysqli_fetch_array($result)) {
        $office_id='"'.$row['fname'].'",';
        $office_id='"name":'.$office_id;
        $office_code='"'.$row['lname'].'",';
        $office_code='"position":'.$office_code;
        $office_desc='"'.$row['office_code'].'",';
        $office_desc='"office":'.$office_desc;
        $room_no='"'.$row['room_no'].'",';
        $room_no='"extn":'.$room_no;
        $building='"'.$row['user_type_desc'].'",';
        $building='"start_date":'.$building;
        $user_id=$row['user_id'];
        $userinfo_id=$row['userinfo_id'];
        $check_bio = mysqli_query($con,"SELECT * from lb_bio WHERE user_id = '$user_id'");
        $cbio=mysqli_fetch_array($check_bio);
        if($cbio==NULL)
            $is_archived='"'."<a href='register/getProfile/$user_id');><img src='./Resources/images/fingerprint48.JPG' width='18px' heigth='18px' class='icon16 fl-space2' alt='' title='register'> </a><a href='e_staff/getProfile/$user_id'><img src='./Resources/images/ico_edit_16.png' class='icon16 fl-space2' alt='' title='Edit'></a><a href='s_staff/deleteStaff/$userinfo_id'><img src='./Resources/images/ico_delete_16.png' class='icon16 fl-space2' alt='' title='delete'></a>".'"';
        else
            $is_archived='"'."<a href='e_staff/getProfile/$user_id'><img src='./Resources/images/ico_edit_16.png' class='icon16 fl-space2' alt='' title='Edit'></a><a href='s_staff/deleteStaff/$userinfo_id'><img src='./Resources/images/ico_delete_16.png' class='icon16 fl-space2' alt='' title='delete'></a>".'"';
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