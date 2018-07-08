<!DOCTYPE html>
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
<title>LOGBANK - STAFF RECORD</title>
<?php 
    include('./Resources/include/Resources3.php');
?>
<script>
$(document).ready(function() {

    $('#example').dataTable( {
        "ajax": {
            "url": "./data/staff_summary_file.php",
            "dataSrc": ""
        },
        "order": [0,"desc"],
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
        ]
    } );
    $('table tbody tr td').css({'padding':'10px'});
} );
</script>
<script>
$(document).ready(function() {

    $('#staffactivity').dataTable( {
        "ajax": {
            "url": "./data/staff_activity_file.php",
            "dataSrc": ""
        },
        "order": [3,"desc"],
        "columns": [
            { "data": "name" },
            { "data": "note" },
            { "data": "time" },
            { "data": "date" },
        ]
    } );
    $('table tbody tr td').css({'padding':'10px'});
} );
</script>

<script>
$(document).ready(function() {

    $('#staffreport').dataTable( {
        "ajax": {
            "url": "./data/staff_activity_file.php",
            "dataSrc": ""
        },
        "order": [3,"desc"],
        "columns": [
            { "data": "name" },
            { "data": "note" },
            { "data": "time" },
            { "data": "date" },
        ]
    } );
    $('table tbody tr td').css({'padding':'10px'});
} );
</script>



<script type="text/javascript">
    jQuery(document).ready(function(){
         jQuery('#datepicker2').datepicker();
        jQuery('#datepicker').datepicker("option", "dateFormat","yy-mm-dd");
        jQuery('#datepicker2').datepicker("option", "dateFormat","yy-mm-dd");


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
                var id = jQuery('#employee').val();


                jQuery("#resultDiv").load("staff/prints/"+id+"/"+date1+"/"+date2);
                
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
				<li class="active"><a href="s_log"><span class="iconfa-th-list"></span> Log Record</a></li>
				<li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
				<li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
				<?php }
				if($userinfo['user_type_id']==3){?>
				<li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
				<li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
				<li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
				<?php } ?>
                
				<?php if($userinfo['user_type_id']==4){?>
				<li><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
				<li class="active"><a href=""><span class="iconfa-th-list"></span> Staff</a></li>
				<li><a href="personal"><span class="iconfa-th-list"></span> Personal</a></li>
				<?php } ?>
            </ul>
        </div><!--leftmenu-->
		
        
    </div><!-- leftpanel -->

    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Staff Record</li>
            <li class="right">
            </li>
        </ul>
        
        <div class="pageheader">
            
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h1>Staff</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
					<div class="tabbedwidget tab-primary">
                            <ul>
                                <li><a href="#a-1">Summary Attendance</a></li>
                                <li><a href="#a-2">Staff Acitivtiy</a></li>
								<li><a href="#a-3">Activtiy Report</a></li>
                            </ul>
                            
							<!--tab1 vistor log book -->
							<div id="a-1">
					<div id="dashboard-left" class="span12">
				<h4 class="widgettitle">Daily Time Record</h4>
                	<table id="example" class="display" cellspacing="0" width="100%">

                    <thead>
                         <tr>
                            <th>DATE</th>
                            <th>NAME</th>
                            <th>OFFICE</th>
                            <th>TIME IN</th>
                            <th>TIME OUT</th>
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
  

         <!-------------------------------SELECTION OF EMPLOYEE----------------------------------------> 

                <form id="form1" class="stdform" method="post" action="staff.php">
                    <div class="widgetbox box-inverse">
                        <h4 class="widgettitle">Filter</h4>
                             <div class="widgetcontent wc1">
                                <span class="formwrapper">
                                    <select data-placeholder="-------Select Employee-------" style="width:200px" id="employee" name="employee" class="chzn-select" tabindex="2">
                                          <?php 
                                            $sels = mysql_query("select user_id, fname, lname, office from lb_userinfo where office= '$myoffice'");
                                            $sarray = mysql_fetch_array();
                                           
                                                do
                                                {
                                                    echo "<option value='$sarray[0]'>$sarray[1] $sarray[2]</option>";
                                                }while($sarray = mysql_fetch_array($sels));
                                            ?>
                                    </select>
                                </span>
         <!---------------------------------DATE RANGE SELECTION---------------------------------------->    

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
                    <!--style="display:none"-->
                <div class="par control-group" id = "resultDiv">
                    
                  
                    </div>  


				</div>
				
				<div id="dashboard-right" class="span4">
				                            
                        <div class="divider15"></div>
                        
                        <div class="widgetbox">                        
                    
                        </div><!--widgetbox-->
				</div>					
                            </div>
                            <div id="a-2">
                     <h4 class="widgettitle">Staff Activity</h4>
                	<table id="staffactivity" class="display" cellspacing="0" width="100%">
                   
                    <thead>
                        <tr>
                            <th class="head1 center">Name</th>
                            <th class="head0 center">Note</th>
                            <th class="head1 center">Time</th>
                            <th class="head0 center">Date</th>
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
                        </div><!--tabbedwidget-->
				<div id="a-3">
				
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
</body>
</html>
