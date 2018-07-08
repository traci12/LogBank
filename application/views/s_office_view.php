
<!DOCTYPE html>
<html>
<head>
<?php 
    include('./Resources/include/Resources.php');
?>
<?=form_open('s_office')?> 
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
            "url": "./data/s_office_file.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "salary" }
        ]
    } );
} );
</script>
<script type="text/javascript">
function newPopup(url) {
    popupWindow = window.open(url,'popUpWindow','height=400,width=600,left=10,top=10,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no')

}
</script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
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
                <li class="dropdown active"><a href=""><span class="iconfa-th-list"></span> System Setup</a>
                	<ul><li><a href="s_staff">Manage User</a></li>
					
						<li class="active"><a href="s_office">Manage Office</a></li>
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
            <li>Manage Office</li>
            
        </ul>
        
        <div class="pageheader">
            
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h1>Manage Office</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                     <div class="widgetbox box-inverse">
					 <h4 class="widgettitle">Office Data Table</h4>
                <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>BUILDING</th>
                <th>OFFICE CODE</th>
                <th>OFFICE DESCRIPTION</th>
                <th>ROOM NUMBER</th>                
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
 
        </tr>
        </tfoot>
    </table>	
					<br><br>
                    <div>
    <div>
        <h3>Add Office</h3>
    </div>
    <div class="widgetbox box-inverse">
    <form id="form1" class="stdform" method="post" action="controller/addoffice.php">
    <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Office</h4>
    <div class="par control-group">
                                    <label class="control-label" for="building">Building</label>
                                <div class="controls"><?php 
                                    $data = array (
                                    'name' => 'building',
                                    'id' => 'building',
                                    'required' => 'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data);?></div>
                            </div>
                            
                            <div class="control-group">
                                    <label class="control-label" for="office code">Office Code</label>
                                <div class="controls"><?php 
                                    $data = array (
                                    'name' => 'ofcode',
                                    'id' => 'ofcode',
                                    'required' => 'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data);?></div>
                            </div>
                            <div class="control-group">
                                    <label class="control-label" for="office description">Office Description</label>
                                <div class="controls"><?php 
                                    $data = array (
                                    'name' => 'ofdesc',
                                    'id' => 'ofdesc',
                                    'required' => 'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data);?></div>
                            </div>
                            <div class="control-group">
                                    <label class="control-label" for="room number">Room Number</label>
                                <div class="controls"><?php 
                                    $data = array (
                                    'name' => 'roomnum',
                                    'id' => 'roomnum',
                                    'required' => 'required',
                                    'class' => 'input-medium'
                                    );
                                ?>
                                <?=form_input($data);?></div>
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
    </div>
    </form>
    </div>
</div>				
					
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
<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal hide fade in" id="myModal">
    <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
        <h3 id="myModalLabel">Edit Office</h3>
    </div>
    <div class="modal-body">
    <script>
    function pass(id){

    document.getElementById("myframe").src="controller/e_office.php?sid="+id;
    }
    </script>
 <iframe width="400px" height="400px" id="myframe" />
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn">Close</button>
    </div>
</div>

</body>
</html>
<?=form_close()?>