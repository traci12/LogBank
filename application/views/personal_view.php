<?php 
$username=$userinfo['username'];
$fname=$userinfo['fname'];
$lname=$userinfo['lname'];
$mname=$userinfo['mname'];
$uid=$userinfo['id'];
$address1=$userinfo['address1'];
$address2=$userinfo['address2'];
$address3=$userinfo['address3'];
$gender=$userinfo['gender'];
$password=$userinfo['password'];
$birthday=$userinfo['birthday'];
$contact=$userinfo['contact'];
$email=$userinfo['email'];
$myoffice=$userinfo['office'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>LOGBANK - PERSONAL RECORD</title>
<?php 
    include('./Resources/include/Resources3.php');
?>
<script>
$(document).ready(function() {
    $('#dtrrecord').dataTable( {
        "ajax": {
            "url": "data/my_attendance_file.php",
            "dataSrc": ""
        },
        "order":[0,"desc"],
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" }
        ]
    } );
} );
</script>
<script>
$(document).ready(function() {
    $('#myactivity').dataTable( {
        "ajax": {
            "url": "./data/my_activity_file.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "activity" },
            { "data": "time" },
            { "data": "date" }
        ]
    } );
} );
</script>
<script type="text/javascript">
   jQuery(document).ready(function(){

        jQuery('#datepicker2').datepicker();
        jQuery('#datepicker').datepicker("option", "dateFormat","yy-mm-dd");
        jQuery('#datepicker2').datepicker("option", "dateFormat","yy-mm-dd");
        ;
        // dynamic table
        jQuery('#dyntable').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'desc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        jQuery('#dyntable2').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'desc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        jQuery('#dyntable3').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'desc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        jQuery('#dyntable4').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'desc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });

        jQuery("#submit").click(function(){


                var date1 = jQuery('#datepicker').val();
                var date2 = jQuery('#datepicker2').val();
                var id = "<?php echo $uid;?>";
                if(date1.toString().length==0)
                    alert("ERROR");
                else
                    jQuery("#resultDiv").load("my_attendance/prints/"+id+"/"+date1+"/"+date2);
                
        });
        
    });
    
    function PrintElem(elem)
    {
        Popup(jQuery(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'Daily Time Record', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        mywindow.document.write('<link rel="stylesheet" href="./Resources/css/style.default.css" type="text/css" />');
        mywindow.document.write('<link rel="stylesheet" href="./Resources/css/responsive-tables.css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }
</script>
</head>

<body>
<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="dashboard.html"><img src="./Resources/images/logo.png" alt="" /></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
                        
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="./uploads/<?php echo $userinfo['url']; ?>" alt="" />
                        <div class="userinfo">
                            <h5><?php echo $userinfo['fname']." ".$userinfo['lname']; ?> <!--<small>- juan@themepixels.com</small>--></h5>
                            <ul>
                                <li><a href="editprofile">Edit Profile</a></li>
                                <li><a href="logout">Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>
 
    <div class="leftpanel">
        
        <div class="leftmenu">   
        
            <ul class="nav nav-tabs nav-stacked">
                
                <li class="nav-header">Navigation</li>
                                <?php if($userinfo['user_type_id']==1){?>
                <li><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="biometrics"><span class="iconfa-laptop"></span> Attendance</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-th-list"></span> System Setup</a>
                    <ul><li><a href="s_staff">Manage User</a></li>
                    
                        <li><a href="s_office">Manage Office</a></li>
                        <li class="dropdown"><a href="">Inspection</a>
                        <ul>
                            <li><a href="s_checklist">Roving Checklist</a></li>
                            <li><a href="">Activity Type</a></li>
                        </ul>
                     </li>
                    </ul>
                </li>
                <li class="active"><a href="s_log"><span class="iconfa-th-list"></span> Personal Record</a></li>
                <li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
                <li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
                <?php }
                if($userinfo['user_type_id']==2){?>
                <li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="biometrics"><span class="iconfa-laptop"></span> Attendance</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-th-list"></span> Log Record</a>
                    <ul><li><a href="v_log">Visitors Logbook</a></li>
                    
                        <li><a href="i_report">Inspection Report</a></li>
                        <li><a href="sa_report">Staff Activity Report</a></li>
                        <li><a href="dtr_record">Daily Time Record</a></li>
                    </ul>
                </li>
                <li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
                <li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
                <?php }
                if($userinfo['user_type_id']==3){?>
                <li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
                <li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
                <?php }?>
                
                <?php if($userinfo['user_type_id']==4){?>
                <li><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="staff"><span class="iconfa-th-list"></span> Staff</a></li>
                <li class="active"><a href="personal"><span class="iconfa-th-list"></span> Personal</a></li>
                <?php }?>
            </ul>
        </div><!--leftmenu-->
        
        
    </div><!-- leftpanel -->

    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Log Record</li>
            <li class="right">
               
            </li>
        </ul>
        
        <div class="pageheader">
            
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h1>Personal</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                    <div class="tabbedwidget tab-primary">
                            <ul>
                                <li><a href="#a-1">My Daily Time Record</a></li>
                                <li><a href="#a-2">My Acitivtiy</a></li>
                            </ul>
                            
                            <!--tab1 vistor log book -->
                <div id="a-1">
                    <div id="dashboard-left" class="span8">
                        <h4 class="widgettitle">Daily Time Record</h4>
                           <table id="dtrrecord" class="display" cellspacing="0" width="100%">
                               
                           <thead>
            <tr>
                <th>DATE</th>
                <th>TIME IN</th>
                <th>TIME OUT</th>
                <th>NO OF HOURS</th>
            </tr>
        </thead>
 <tfoot>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
 
        </tr>
        </tfoot>
                         </table>
                        <br><br>

 <script type="text/javascript">
        function showDiv(){
                
                var date1 = $("#datepicker").val();
                var date2 = $("#datepicker2").val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/logbank/staff.php",
                    data: {date1: date1},
                    success: function( data){
                        alert( data);
                    }
                });
            }

    </script>

<!---------------------------------DATE RANGE SELECTION----------------------------------------> 
                <form id="form1" class="stdform" method="post">
                    <div class="widgetbox box-inverse">
                        <h4 class="widgettitle">Filter</h4>
                             <div class="widgetcontent wc1">
                                
                                    <div class="par control-group">
                                        <label class="control-label" for="from">From</label>
                                            <div class="controls">
                                                <input id="datepicker" type="text" name="from" class="input-small" />
                                            </div>
                                    </div>

                                    <div class="par control-group">
                                        <label class="control-label" for="to">To</label>
                                            <div class="controls">
                                                <input id="datepicker2" type="text" name="to" class="input-small" />
                                            </div>
                                    </div>

                                    <p class="stdformbutton">
                                        <input type="button" id = "submit" name="submit" class="btn btn-primary" value="Submit">
                                    
                                    </p>

                                    
                            </div>
                    </div>
                </form>

                <div class="par control-group" id="resultDiv">
                  
                    </div>  


                </div>
                <div id="dashboard-right" class="span4">
                                            
                        <div class="divider15"></div>
                        
                        <div class="widgetbox">                        
                        <div class="headtitle">
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>

                            <h4 class="widgettitle">Summary</h4>
                        </div>
                            <div class="widgetcontent">
                                
                                <?php 
                                $query = mysql_query("SELECT DATE_FORMAT(NOW(), '%M'), (SUM( TIME_TO_SEC( dtr_timeout ) - TIME_TO_SEC( dtr_timein ) )) /3600 AS hour from lb_dtrstaff
                                                        WHERE MONTH(dtr_date) = DATE_FORMAT( NOW() , '%c' ) AND YEAR(dtr_date) = DATE_FORMAT( NOW() , '%Y' ) AND user_id='$uid'");
                                $res = mysql_fetch_array($query);
                                ?>

                                <h5><i class="icon-time"></i><?php echo " Total Hours for the month of ".$res[0].": ";?><strong><?php echo " ".$res[1];?></strong></h5>
                            </div><!--widgetcontent-->
                        </div><!--widgetbox-->
                </div>      


                            </div>
                            <div id="a-2">
                     <h4 class="widgettitle">My Activity</h4>
                    <table id="myactivity" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ACTIVITY</th>
                <th>TIME</th>
                <th>DATE</th>
            </tr>
        </thead>
        <tfoot>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        </tfoot>
                </table>
                        </div><!--tabbedwidget-->
                    
                </div><!--row-fluid-->
                
                <div class="footer">
                    <div class="footer-left">
                        <span>&copy; 2014. Diliman Interactive Learning Center. All Rights Reserved.</span>
                    </div>
               
                </div><!--footer-->
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->
</body>
</html>
