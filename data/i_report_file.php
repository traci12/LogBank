
[
<?php

include('connection.php');
$result=mysqli_query($con,"SELECT * FROM lb_inspection_rep INNER JOIN lb_act_type ON lb_inspection_rep.inc_id = lb_act_type.inc_id WHERE lb_act_type.is_archived LIKE '0' ORDER BY `lb_inspection_rep`.`ins_date` DESC ");
//$result = mysqli_query($con,"SELECT * FROM lb_office");
$lastrow=mysqli_num_rows($result);
$firstrow=0;
    while($row = mysqli_fetch_array($result)) {
        $activity='"'.$row['inc_des'].'",';
        $activity='"activity":'.$activity;
        $note='"'.preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $row['notes']).'",';
        $note='"note":'.$note;
        $time='"'.$row['ins_time'].'",';
        $time='"time":'.$time;
        $date='"'.$row['ins_date'].'"';
        $date='"date":'.$date;

        $firstrow++;
        if($firstrow==$lastrow) {
            echo '{';

            echo $activity;
            echo $note;
            echo $time;
            echo $date;
            
            echo '}';
        }
        else {
            echo '{';

            echo $activity;
            echo $note;
            echo $time;
            echo $date;

            echo '},';
        }
        }
?>
]