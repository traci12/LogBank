
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
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>LOGBANK - DASHBOARD</title>
<?php 
    include('./Resources/include/Resources.php');
?>
</head>
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery("#clock").load("reg_clock");
});
</script>
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
                            <h5><?php echo $userinfo['fname']." ".$userinfo['lname']; ?> <small>- <?php echo $userinfo['email'];?></small></h5>
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
                <li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
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
				<!--<li><a href="biometrics"><span class="iconfa-laptop"></span> Attendance</a></li>-->
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
				<li><a href="staff"><span class="iconfa-th-list"></span> Staff</a></li>
				<li><a href="personal"><span class="iconfa-th-list"></span> Personal</a></li>
				<?php }?>
				<?php if($userinfo['user_type_id']==5){?>
				<li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
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
            <li>Dashboard</li>
            
        </ul>
        
        <div class="pageheader">
            
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h1>Dashboard</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
         
         <!-- Dashboard Content 2-25-14-->
         
          <div class="row-fluid">
                    <div id="dashboard-left" class="span8">
                      	
                        <h4 class="widgettitle"><span class="icon-comment icon-white"></span> Recent Site Activities</h4>
                        <div class="widgetcontent nopadding">
                           <?php if($userinfo['user_type_id']!=2){ ?>

			   <?php }else{?>
			   
			<div id="clock"></div>
			<iframe name src='attendance' width='100%' height='250px'></iframe>
			   <?php }?>
                        </div>
                        
                        <br />
                        
                        
                    </div><!--span8-->
                    
                    <div id="dashboard-right" class="span4">
                        <?php if($userinfo['user_type_id']!=2){ ?>
                        <h5 class="subtitle">Guard-On-Duty</h5>
                        
                        <div class="divider15"></div>
                        
                        <div class="alert alert-block">
                              <button data-dismiss="alert" class="close" type="button">&times;</button>
                              <h4><font color="#000000"><?php echo date('Y-m-d H:i:s'); ?></font></h4><br/>
                              <?php 
							  $currsession = mysql_fetch_array(mysql_query("select CONCAT(UCASE(left(a.fname,1)), SUBSTRING(a.fname,2)), CONCAT(UCASE(left(a.lname,1)),SUBSTRING(a.lname,2)), Time(b.curr_datetime) from lb_userinfo as a join lb_currsession as b on a.user_id = b.user_id
							  								join lb_user as c on c.user_id = a.user_id where c.user_type_id =2 order by b.curr_id DESC "));
							  
							  ?>
                              <p style="margin: 8px 0"><h4>Name:    <font color="#FF0000">  <?php echo ' '.$currsession[0].' '.$currsession[1]; ?></h4></font></p>
                              <p style="margin: 8px 0"><h4>Time-in: <font color="#FF0000">  <?php echo '   '.$currsession[2]; ?></h4></font></p>
                        </div><!--alert-->
                        
                        <br />
                            
                        <div class="divider15"></div>
                        <iframe width="99%" height="500px" src="./chat/chat.php?uid=<?php echo $uid;?>&name=<?php echo $username;?>&email=<?php echo $email;?>"></iframe>
                      	<?php }else{?>
         
			<iframe width="105%" height="506px" src="./chat/chat.php?uid=<?php echo $uid;?>&name=<?php echo $username;?>&email=<?php echo $email;?>"></iframe>
			<?php }?>         
                    </div><!--span4-->
                </div><!--row-fluid-->
                
         
         
         <!--End of Dashboard Content-->
         
         
         
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
