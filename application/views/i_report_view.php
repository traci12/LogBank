<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>LOGBANK - INSPECTION LOG RECORD</title>
<?php 
    include('./Resources/include/Resources.php');
?>
<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "ajax": {
            "url": "/logbank/data/i_report_file.php",
            "dataSrc": ""
        },
        "order": [[ 3, "desc" ]],
        "columns": [
            { "data": "activity" },
            { "data": "note" },
            { "data": "time" },
            { "data": "date" }
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
	function zoom() {
            document.body.style.zoom = "75%" 
        }
	
</script>
</head>

<body onLoad="zoom();">

<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="dashboard"><img src="./Resources/images/logo.png" alt="" /></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
        				
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="/logbank/uploads/<?php echo $userinfo['url']; ?>" alt="" />
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
								<li><a href="#a-2">Inspection Report</a></li>
                            </ul>
                            
							<!--tab1 vistor log book -->
                            <div id="a-2">
                     <h4 class="widgettitle">Inspection Report</h4>
                	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ACTIVITY</th>
                <th>NOTE</th>
                <th>TIME</th>
                <th>DATE</th>
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
<div class="widgetbox box-inverse">
                <h4 class="widgettitle">Inspection</h4>
                <div class="widgetcontent wc1">
                <?=form_open('i_report/addReport')?>
                            <div class="par control-group">
                                    <label class="control-label" for="firstname">Activity</label>
                                <div class="controls">
                                <?php 
                                    $options=array();
                                    $query=mysql_query("SELECT * FROM lb_act_type");
                                    while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
                                        $options[$row['inc_id']]= $row['inc_des'];
                                    }
                                         echo form_dropdown('act',$options,'','style="width:150px"; class="chzn-select"; tabindex="2";');
                                ?>  
								
								</div>
                            </div>
                            
                            <p>
                            <label>Note</label>
                            <span class="field"><?php $data = array (
                                                'name' => 'note',
                                                'id' => 'location',
                                                'class' => 'span5',
                                                'rows' => '5',
                                                'required' => 'required',
                                                'cols' => '80'

                                            );
                            ?>
                            <?=form_textarea($data);?></textarea></span> 
							</p>
                                                    
                            <p class="stdformbutton">
                                        <?php 
                                        $data=array(
                                         'name'=> 'submit',
                                            'value' => 'Submit',
                                            'class' => 'btn btn-primary'
                                     );
                                    ?>
                            <?=form_submit($data);?>
                            <?=form_close()?>
                            </p>
                </div><!--widgetcontent-->
            </div>
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
