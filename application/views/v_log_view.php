<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>LOGBANK - Visitors Log Record</title>
<?php 
    include('./Resources/include/Resources.php');
?>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "ajax": {
            "url": "./data/v_log_file.php",
            "dataSrc": ""
        },
        "order": [[ 0, "desc" ]],
        "columns": [
            { "data": "date" },
            { "data": "name" },
            { "data": "office" },
            { "data": "purpose" },
            { "data": "persontovisit" },
            { "data": "timein" },
            { "data": "timeout" },
            { "data": "action" }
        ]
    } );
} );
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
      
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
        
    });
	
	
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
                <li class="dropdown active"><a href=""><span class="iconfa-th-list"></span> Log Record</a>
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
				if($userinfo['user_type_id']==2){ ?>
				<li><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
				<li><a href="biometrics"><span class="iconfa-laptop"></span> Attendance</a></li>
				<li class="dropdown active"><a href=""><span class="iconfa-th-list"></span> Log Record</a>
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
				if($userinfo['user_type_id']==3){ ?>
				<li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
				<li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
				<li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
				<li><a href="my_visitors"><span class="iconfa-th-list"></span> My Visitors</a></li>
				<?php } ?>
                
				<?php if($userinfo['user_type_id']==4){ ?>
				<li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
				<li><a href=""><span class="iconfa-th-list"></span> Staff</a></li>
				<li><a href=""><span class="iconfa-th-list"></span> Personal</a></li>
				<?php } ?>
				
				<?php if($userinfo['user_type_id']==5){ ?>
				<li><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
				<li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
				<li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
				<li><a href="my_visitors"><span class="iconfa-th-list"></span> My Visitors</a></li>
				<?php } ?>
            </ul>
        </div><!--leftmenu-->
		
        
    </div><!-- leftpanel -->

    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Log Record</li>
        </ul>
        
        <div class="pageheader">
            
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h1>Log Record</h1>
            </div>
        </div><!--pageheader-->

        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
					<div class="tabbedwidget tab-primary">
                        <ul>
                            <li><a href="#a-1">Visitor Log Book</a></li>
								
                        </ul>
                            
							<!--tab1 vistor log book -->
					   <div id="a-1">
					       <?php
					           $count=mysql_num_rows(mysql_query("SELECT * FROM lb_visit_trans WHERE vt_timeout='' AND is_archived='0'"));
					        ?>
					        <h4 class="widgettitle">NUMBER OF VISITOR/S INSIDE THE BUILDING: <?php echo $count;?></h4>
                	   <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th width="7%">DATE</th>
                <th>NAME</th>
                <th>OFFICE</th>
                <th>PURPOSE</th>
                <th>PERSON TO VISIT</th>
                <th>TIME IN</th>
                <th>TIME OUT</th>
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
        <td></td>
        <td></td>
        </tr>
        </tfoot>
 
    </table>

                <?=form_open('v_log');?>
				<div class="widgetbox box-inverse">
                <h4 class="widgettitle">Log Book</h4>
                <div class="widgetcontent wc1">

                            <div class="par control-group">
                                    <label class="control-label" for="firstname">First Name</label>
                                <div class="controls">
                                <?php 
                                    $data = array (
                                    'name' => 'fname',
                                    'id' => 'fname',
                                    'required' => 'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                
                                <?=form_input($data);?>
                            </div>
                            
                            <div class="control-group">
                                    <label class="control-label" for="lastname">Last Name</label>
                                <div class="controls">
                                <?php 
                                    $data = array (
                                    'name' => 'lname',
                                    'id' => 'lname',
                                    'required' => 'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data);?>
                            </div>
                            
                            <div class="par control-group">
                                    <label class="control-label" for="purpose">Purpose</label>
                                <div class="controls">
                                <?php 
                                    $data = array (
                                    'name' => 'purpose',
                                    'id' => 'purpose',
                                    'required' => 'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data);?>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="office to visit">Person to Visit</label>
                                <div class="controls">
                                      <?php 
                                    $options=array();
                                    $query=mysql_query("SELECT * FROM lb_userinfo");
                                    while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
                                        $options[$row['user_id']]= $row['fname']." ".$row['lname'];
                                    }
                                         echo form_dropdown('staff',$options,'','style="width:150px"; class="chzn-select"; tabindex="2"; placeholder="Staff";');
                                ?>							
								</div>
                            <div class="par control-group">
                                    <label class="control-label" for="office to visit">Office to Visit</label>
                                <div class="controls">
                                     <?php 
                                    $options=array();
                                    $query=mysql_query("SELECT * FROM lb_office WHERE is_archived=0");
                                    while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
                                        $options[$row['office_id']]= $row['office_code'];
                                    }
                                         echo form_dropdown('office',$options,'','style="width:150px"; class="chzn-select"; tabindex="2"; placeholder="Staff";');
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
                            </p>
                </div><!--widgetcontent-->
                          
            </div>						
                     <?=form_close();?>         </div>
							</div>
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
