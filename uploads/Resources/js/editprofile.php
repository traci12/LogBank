<?php
include('include/lock.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>LOGBANK - DASHBOARD</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />

<link rel="stylesheet" href="css/responsive-tables.css">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="js/responsive-tables.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
</head>

<body>

<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="dashboard.html"><img src="images/logo.png" alt="" /></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
        				
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="images/photos/thumb1.png" alt="" />
                        <div class="userinfo">
                            <h5><?php echo $u['fname']." ".$u['lname']; ?> <!--<small>- juan@themepixels.com</small>--></h5>
                            <ul>
                                <li><a href="editprofile.php">Edit Profile</a></li>
                                <li><a href="logout.php">Sign Out</a></li>
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
				<?php if($ut==1){?>
                <li><a href="dashboard.php"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-th-list"></span> System Setup</a>
                	<ul><li><a href="s_staff.php">Manage User</a></li>
					
						<li><a href="s_office.php">Manage Office</a></li>
                    	<li class="dropdown"><a href="">Inspection</a>
                        <ul>
                            <li><a href="s_checklist.php">Roving Checklist</a></li>
                            <li><a href="">Activity Type</a></li>
                        </ul>
                     </li>
                    </ul>
                </li>
				<li><a href="s_log.php"><span class="iconfa-th-list"></span> Log Record</a></li>
					<?php }elseif($ut==2){?>
				<li class="active"><a href="dashboard.php"><span class="iconfa-laptop"></span> Dashboard</a></li>
				<li><a href="s_log.php"><span class="iconfa-th-list"></span> Log Record</a></li>
                	
					<?php }elseif($ut==3){?>
					
					
					<?php }?>
                
            </ul>
        </div><!--leftmenu-->
		
        
    </div><!-- leftpanel -->

    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Edit Profile</li>
            <li class="right">
                    <a href="" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-tint"></i> Color Skins</a>
                    <ul class="dropdown-menu pull-right skin-color">
						<li><a href="palegreen">Pale Green</a></li>
                        <li><a href="default">Default</a></li>
                        <li><a href="navyblue">Navy Blue</a></li>
                        <li><a href="red">Red</a></li>
                        <li><a href="green">Green</a></li>
                        <li><a href="brown">Brown</a></li>
                    </ul>
            </li>
        </ul>
        
        <div class="pageheader">
            
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h1>Edit Profile</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
				<div class="span4 profile-left">
                        
                        <div class="widgetbox profile-photo">
                            <div class="headtitle">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Change Photo</a></li>
                                      <li><a href="#">Remove Photo</a></li>
                                    </ul>
                                </div>
                                <h4 class="widgettitle">Profile Photo</h4>
                            </div>
                            <div class="widgetcontent">
                                <div class="profilethumb">
                                    <img src="images/profilethumb.png" alt="" class="img-polaroid" />
                                </div><!--profilethumb-->
                            </div>
                        </div>
                            
          <?php 


$sid2 = mysql_fetch_array(mysql_query("select * from lb_userinfo where user_id = $uid"));
$sid3 = mysql_fetch_array(mysql_query("select * from lb_user where user_id = $uid"));

    
$var=$sid3[3];
             $radio = $sid2['gender'];
              switch($radio) {
                case 0:
                  $fem = true;
                break;
                case 1:
                  $mal = true;
                break;
              }

      
     ?>                  
                       
                            
                        </div><!--span4-->
                                        <div class="span8">
                            <form action="editprofile.php" class="editprofileform" method="post">
                                
                                <div class="widgetbox login-information">
                                    <h4 class="widgettitle">Login Information</h4>
                                    <div class="widgetcontent">
                                       <div class="par control-group">
                                    <label class="control-label" for="username">Username</label>
                                <div class="controls"><input type="text" name="username" id="username" class="input-medium" value="<?php echo $sid3[1]; ?>"/></div>
                            </div>
                            
                            <div class="control-group">
                                    <label class="control-label" for="password">Password</label>
                                <div class="controls"><input type="password" name="password" id="password" class="input-medium" value="<?php echo $sid3[2]; ?>"/></div>
                            </div>
                            <div class="control-group">
                                    <label class="control-label" for="cpassword">Confirm Password</label>
                                <div class="controls"><input type="password" name="cpassword" id="cpassword" class="input-medium" /></div>
                            </div>
                            <div class="control-group">
                                    <label class="control-label" for="usertype">User Type</label>
                                <div class="controls">
                                
                                <select data-placeholder="User type" style="width:200px" name="usertype" class="chzn-select" tabindex="2">
                                    <option value=""></option>
                                    <option value="1" <?php if ($var==1) echo 'selected="selected"'?> > System Administrator</option>
                                    <option value="2" <?php if ($var==2) echo 'selected="selected"'?>>Guard</option>
                                    <option value="3" <?php if ($var==3) echo 'selected="selected"'?>>Staff</option>
                                    <option value="4" <?php if ($var==4) echo 'selected="selected"'?>>Intern/SA</option>
                                </select>
                                    </div>
                                </div>
                                
                                
                                <div class="widgetbox personal-information">
                                    <h4 class="widgettitle">Personal Information</h4>
                                    <div class="widgetcontent">
                                        <div class="par control-group">
                                        <p>
                                            <label>First Name</label>
                                            <input type="text" name="firstname" id="firstname" class="input-xlarge" value="<?php echo $sid2[1]; ?>"/>
                                        </p>
                                        <p>
                                            <label>Last Name</label>
                                            <input type="text" name="middlename" id="middlename" class="input-xlarge"  value="<?php echo $sid2[3]; ?>"/>
                                        </p>
                                        <p>
                                            <label>Last Name</label>
                                            <input type="text" name="lastname" id="lastname" class="input-xlarge"  value="<?php echo $sid2[2]; ?>"/>
                                        </p>
                                        <p>
                                            <label>Address(Street)</label>
                                            <input type="text" name="address1" id="address1" class="input-xlarge"  value="<?php echo $sid2[4]; ?>"/>
                                        </p>
                                         <p>
                                            <label>Address(Brgy.)</label>
                                            <input type="text" name="address2" id="address2" class="input-xlarge"  value="<?php echo $sid2[5]; ?>"/>
                                        </p>
                                         <p>
                                            <label>Address(City)</label>
                                            <input type="text" name="address3" id="address3" class="input-xlarge"  value="<?php echo $sid2[6]; ?>"/>
                                        </p>

                            
                               
                            <label>Birthday ex:01/30/2014</label>
                                <input type="text" name="birthday" id="datepicker" class="input-medium" value="<?php echo $sid2[9]; ?>"/>      
                            <p>
                            <label>Gender</label>
                            <span class="formwrapper">
                                <input type="radio" name="gender" value="Male" <?php echo isset($mal) ? 'checked' : '' ; ?> /> Male &nbsp; &nbsp;
                                <input type="radio" name="gender" value="Female" <?php echo isset($fem) ? 'checked' : '' ; ?> /> Female
                            </span>
                            </p>
                            <p>
                             <label>Email</label>
                                <input type="text" name="email" id="email" class="input-medium" value="<?php echo $sid2[8]; ?>"/>
                            </p>
                            <p>
                            <label>Contact</label>
                                <input type="text" name="contact" id="contact" class="input-medium" value="<?php echo $sid2[7]; ?>"/>
                            </p>
                         <p>
                          <label>Office</label>
                            <span class="formwrapper">
                                <select data-placeholder="Office" style="width:150px" name="office" class="chzn-select" tabindex="2">
                                  <?php 
                                    $sels = mysql_query("select * from lb_office where is_archived = 0");
                                    $affs = mysql_affected_rows();
                                    $sarray = mysql_fetch_array();
                                   

           
                                    if($affs > 0)
                                    {
                                        do
                                        {?>
                                            <option value="<?php echo $sarray[0];?>" <?php if ($sarray[0]==$sid2[11]) echo 'selected="selected"'?>><?php echo $sarray[1];?> </option>
                                           

                                        <?}while($sarray = mysql_fetch_array($sels));
                                    }
                                    else
                                    {
                                        
                                        do
                                        {
                                            echo "<option value='$startar[0]'>$startar[1]</option>";
                                        }while($startar = mysql_fetch_array($start));
                                    }
                                    
                                    
                                    ?>
                                </select>
                            </span>
                    </p>
                    </div>
                    </div>
                                        </p>
                                    </div>
                                </div>
                                
                                
                               <p class="stdformbutton">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                            </p>
                                
                            </form>
   
 
                        </div><!--span8-->
				
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

<?php 


if (isset($_POST['submit'])){

  
    $a = $_POST['firstname'];
    $b = $_POST['middlename'];
    $c = $_POST['lastname'];
    $d = $_POST['birthday'];
    $g = $_POST['address1'];
    $h = $_POST['address2'];
    $i = $_POST['address3'];
    $e = $_POST['gender'];
    $f = $_POST['contact'];
    $o = $_POST['email'];
    $j = $_POST['office'];
    $k = $_POST['usertype'];
    $l = $_POST['username'];
    $m = $_POST['password'];
    $n = $_POST['cpassword'];
  
  
 
        mysql_query("update lb_userinfo set fname='$a',mname='$b',lname='$c',address1='$g',address2='$h',address3='$i', email='$o', contact='$f',birthday='$d',gender='$e',office='$j' where user_id = '$uid'");   
        mysql_query("udpate lb_user set username='$l',password='$m',user_type_id='$k' where user_id='$uid'");

}

    ?>

</html>