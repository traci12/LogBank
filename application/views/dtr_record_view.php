    <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>LOGBANK - DTR LOG RECORD</title>
<?php 
    include('./Resources/include/Resources.php');
?>
<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "ajax": {
            "url": "/logbank/data/dtr_record_file.php",
            "dataSrc": "",
        },
        "order": [[ 0, "desc" ]],
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" },
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
				if($userinfo['user_type_id']==2){?>
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
				if($userinfo['user_type_id']==3){?>
				<li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
				<li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
				<li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
				<li><a href="my_visitors"><span class="iconfa-th-list"></span> My Visitors</a></li>
				<?php }?>
                
				<?php if($userinfo['user_type_id']==4){?>
				<li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
				<li><a href=""><span class="iconfa-th-list"></span> Staff</a></li>
				<li><a href=""><span class="iconfa-th-list"></span> Personal</a></li>
				<?php }?>
				
				<?php if($userinfo['user_type_id']==5){?>
				<li><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
				<li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
				<li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
				<li><a href="my_visitors"><span class="iconfa-th-list"></span> My Visitors</a></li>
				<?php }?>
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
        
								<li><a href="#a-4">Daily Time Record</a></li>
								
                            </ul>
                            
							<!--tab1 vistor log book -->
							<div id="a-4">
					<?php
					$count=mysql_num_rows(mysql_query("SELECT * FROM lb_dtrstaff WHERE dtr_timeout='' AND is_archived='0'"));
					?>
					<h4 class="widgettitle">NUMBER OF STAFF INSIDE THE BUILDING: <?php echo $count;?></h4>
                	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>DATE</th>
                <th>NAME</th>
                <th>OFFICE</th>
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
        </tr>
        </tfoot>
 
    </table>
									
							
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
