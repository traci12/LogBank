
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
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>LOGBANK - SYSTEM SETUP</title>
<?php 
    include('./Resources/include/Resources.php');
?>



<script type="text/javascript">
    jQuery(document).ready(function(){
        // dynamic table
        jQuery('#dyntable').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'asc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        
        jQuery('#dyntable2').dataTable( {
            "bScrollInfinite": true,
            "bScrollCollapse": true,
            "sScrollY": "300px"
        });        
    });
    
    
</script>
   <script>
$(document).ready(function() {

    $('#example').dataTable( {
        "ajax": {
            "url": "./data/s_staff_file.php",
            "dataSrc": ""
        },
        "order": [4,"desc"],
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" }
        ]
    } );
    $('table tbody tr td').css({'padding':'10px'});
} );
</script>
<script type="text/javascript">
function newPopup(url) {
    popupWindow = window.open(url,'popUpWindow','height=500,width=635,left=10,top=10,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no')

}
</script>
</head>

<body>


<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="dashboard"><img src="./Resources/images/logo.png" alt="" /></a>
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
                <?php if($userinfo['user_type_id']==1){ ?>
                <li><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="biometrics"><span class="iconfa-laptop"></span> Attendance</a></li>
                <li class="dropdown active"><a href=""><span class="iconfa-th-list"></span> System Setup</a>
                    <ul><li class="active"><a href="s_staff">Manage User</a></li>
                    
                        <li><a href="s_office">Manage Office</a></li>
                        <li class="dropdown"><a href="">Inspection</a>
                        <ul>
                            <li><a href="s_checklist">Roving Checklist</a></li>
                            
                        </ul>
                     </li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-th-list"></span> Log Record</a>
                    <ul><li><a href="v_log">Visitors Logbook</a></li>
                    
                        <li><a href="i_report">Inspection Report</a></li>
                        <li><a href="sa_report">Staff Activity Report</a></li>
                        <li><a href="dtr_record">Daily Time Record</a></li>
                    </ul>
                </li>
                <li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
                <li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
                <li><a href="my_visitors"><span class="iconfa-th-list"></span> My Visitors</a></li>
                <?php }
                if($userinfo['user_type_id']==2){ 
                ?>
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
                <li><a href="my_visitors"><span class="iconfa-th-list"></span> My Visitors</a></li>
                <?php 
                }
                if($userinfo['user_type_id']==3){ 
                ?>
                <li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
                <li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
                <li><a href="my_visitors"><span class="iconfa-th-list"></span> My Visitors</a></li>
                <?php } ?>
                
                <?php 
                if($userinfo['user_type_id']==4){ 
                ?>
                <li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href=""><span class="iconfa-th-list"></span> Staff</a></li>
                <li><a href=""><span class="iconfa-th-list"></span> Personal</a></li>
                <?php 
                    } 
                ?>
                
                <?php 
                    if($userinfo['user_type_id']==5){ 
                ?>
                <li><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
                <li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
                <li><a href="my_visitors"><span class="iconfa-th-list"></span> My Visitors</a></li>
                <?php 
                    }
                ?>
            </ul>
        </div><!--leftmenu-->
        
        
    </div><!-- leftpanel -->

    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Manage User</li>
            
        </ul>
        
        <div class="pageheader">
            
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h1>Manage User</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <?=form_open('s_staff')?>
                <div class="row-fluid">
                
                     <div class="widgetbox box-inverse">
                     <h4 class="widgettitle">User Data Table</h4>
                <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>OFFICE</th>
                <th>ROOM</th>
                <th>USER TYPE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        </tfoot>
 
    </table>
                <br><br>            
    <div>
    <div class>
        <h3>Add User</h3>
    </div>
    <div>
    <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Basic Information</h4>
                <div class="widgetcontent wc1">

                            <div class="par control-group">
                                    <label class="control-label" for="firstname">First Name</label>
                                <div class="controls">
                                <?php 
                                    $data = array (
                                    'name' => 'firstname',
                                    'id' => 'firstname',
                                    'required'=>'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?= form_input($data);?></div>
                            </div>
                                            
                            <div class="control-group">
                                    <label class="control-label" for="lastname">Last Name</label>
                                <div class="controls">
                                <?php 
                                    $data = array (
                                    'name' => 'lastname',
                                    'id' => 'lastname',
                                    'required'=>'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?= form_input($data);?></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="middlename">Middle Name</label>
                                <div class="controls">
                                <?php 
                                    $data = array (
                                    'name' => 'middlename',
                                    'id' => 'middlename',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?= form_input($data); ?></div>
                            </div>
                            
                            <div class="par control-group">
                                    <label class="control-label" for="Address(Street)">Address(Street)</label>
                                <div class="controls"><?php 
                                    $data = array (
                                    'name' => 'address1',
                                    'id' => 'address1',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?= form_input($data);?></div>
                                    <label class="control-label" for="Address(Barangay)">Address(Barangay)</label>
                                <div class="controls">
                                <?php 
                                    $data = array (
                                    'name' => 'address2',
                                    'id' => 'address2',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data); ?></div>
                                    <label class="control-label" for="Address(City)">Address(City)</label>
                                <div class="controls"><?php 
                                    $data = array (
                                    'name' => 'address3',
                                    'id' => 'address3',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?= form_input($data); ?></div>                                
                            </div>
                            <label>Birthday ex:01/30/2014</label>
                               <?php 
                                    $data = array (
                                    'name' => 'birthday',
                                    'id' => 'datepicker',
                                    'class' => 'input-small'
                                    );
                                ?>
                                <?=form_input($data);?>      
                            <p>
                            <label>Gender</label>
                            <span class="formwrapper">
                            <?php
                            $data = array (
                                'name' => 'gender',
                                'value' => 1,
                                'class' => 'input-medium',
                                ); 
                            ?>
                            <?=form_radio($data);
                            echo "Male&nbsp; &nbsp;";
                            ?>
                            <?php
                            $data = array (
                                'name' => 'gender',
                                'value' => 0,
                                'class' => 'input-medium',
                                ); 
                            ?>
                            <?=form_radio($data);
                            echo "Female";
                            ?>
                            </span>
                            </p>
                            <label>Contact</label>
                                <div class="controls"><?php 
                                    $data = array (
                                    'name' => 'contact',
                                    'id' => 'contact',
                                    'required'=>'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data);?></div>
                          <font color="#FF6600"><p><?php echo form_error('email'); ?></p></font>
                            <label>Email Address</label>
                                <div class="controls"><?php 
                                    $data = array (
                                    'name' => 'email',
                                    'id' => 'email',
                                    'required'=>'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data);?></div>
                            <label>Office</label>
                            
                            <span class="formwrapper">
                               <?php 
                                    $options=array();
                                    $query=mysql_query("SELECT * FROM lb_office WHERE is_archived=0");
                                    while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
                                        $options[$row['office_id']]= $row['office_code'];
                                    }
                                         echo form_dropdown('office',$options,'','style="width:150px"; class="chzn-select"; tabindex="2"; placeholder="Staff";');
                                ?>  
                            </span>
                    
                    </div>
                </div>     
    <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Account Information</h4>
                <div class="widgetcontent wc1">
                
                            <div class="par control-group">
                                    <font color="#FF6600"><p><?php echo form_error('username'); ?></p></font>
                                    <label class="control-label" for="username">Username</label>
                                <div class="controls"><?php 
                                    $data = array (
                                    'name' => 'username',
                                    'id' => 'username',
                                    'required'=>'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data);?></div>
                            </div>
                            
                            <div class="control-group">
                                    <label class="control-label" for="password">Password</label>
                                <div class="controls"><?php 
                                    $data = array (
                                    'name' => 'password',
                                    'id' => 'password',
                                    'required'=>'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data);?></div>
                            </div>
                            <div class="control-group">
                                    <font color="#FF6600"><p><?php echo form_error('cpassword'); ?></p></font>
                                    <label class="control-label" for="cpassword">Confirm Password</label>
                                <div class="controls"><?php 
                                    $data = array (
                                    'name' => 'cpassword',
                                    'id' => 'cpassword',
                                    'required'=>'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data);?></div>
                            </div>
                            <div class="control-group">
                                    <label class="control-label" for="usertype">User Type</label>
                                <div class="controls">
                                <?php 
                                    $options=array(
                                        '1' => 'System Administrator',
                                        '2' => 'Guard',
                                        '3' => 'Staff',
                                        '4' => 'Director',
                                        '5' => 'Intern/SA',
                                        );
                                         echo form_dropdown('usertype', $options,'1','class =chzn-select');
                                ?>
        
                                
                                </div>
                            </div>
                
                <p class="stdformbutton">
                                    <?php 
                            $data=array(
                                'name'=> 'submit',
                                'value' => 'Submit',
                                'class' => 'btn btn-primary'
                                );
                                ?>
                            <?=form_submit($data);?>

                                    <!--<button class="btn btn-primary">Submit Button</button>-->
                            </p>
                    </div>
                    </div>
    </div>
</div>          
                    
                </div><!--row-fluid-->
                <?=form_close()?>
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