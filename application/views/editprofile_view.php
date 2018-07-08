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
$office=$userinfo['office'];

?>
<!DOCTYPE html>
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
function newPopup(url) {
    popupWindow = window.open(url,'popUpWindow','height=500,width=600,left=10,top=10,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no')

}
</script>
<body>
   <?=form_open('editprofile'); ?>
    <?=form_hidden('uid', $uid);?>

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
					<?php }elseif($userinfo['user_type_id']==2){?>
				<li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <?php }
                if($userinfo['user_type_id']==3){?>
                <li><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li class="active"><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
                <li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
                <li><a href="my_visitors"><span class="iconfa-th-list"></span> My Visitors</a></li>
					<?php }elseif($userinfo['user_type_id']==5){?>
                <li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="my_attendance"><span class="iconfa-th-list"></span> My Daily Time Record</a></li>
                <li><a href="my_activity"><span class="iconfa-th-list"></span> My Activity</a></li>
                <li><a href="my_visitors"><span class="iconfa-th-list"></span> My Visitors</a></li>
                <?php }elseif($userinfo['user_type_id']==4){ ?>
                <li class="active"><a href="dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="staff"><span class="iconfa-th-list"></span> Staff</a></li>
                <li><a href="personal"><span class="iconfa-th-list"></span> Personal</a></li>
                <?php } ?>
                
            </ul>
        </div><!--leftmenu-->
		
        
    </div><!-- leftpanel -->

    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Edit Profile</li>
            
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
                                    
                                      <li><a href="JavaScript:newPopup('upload/do_upload');">Change Photo</a></li>
                                      <li><a href="upload/deleteFiles/<?php echo $userinfo['url']; ?>">Remove Photo</a></li>
                                    </ul>
                                </div>
                                <h4 class="widgettitle">Profile Photo</h4>
                            </div>
                            <div class="widgetcontent">
                                <div class="profilethumb">
                                    <img src="/logbank/uploads/<?php echo $userinfo['url']; ?>" alt="" class="img-polaroid" />
                                </div><!--profilethumb-->
                            </div>
                        </div>
                            
          <?php 


$sid2 = mysql_fetch_array(mysql_query("select * from lb_userinfo where user_id = $uid"));
$sid3 = mysql_fetch_array(mysql_query("select * from lb_user where user_id = $uid"));

    
$var=$sid3[3];
             $radio = $sid2['gender'];
              switch($gender) {
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
                                
                                <div class="widgetbox login-information">
                                    <h4 class="widgettitle">Login Information</h4>
                                    <div class="widgetcontent">
                                <font color="#FF6600"><p><?php echo form_error('cpassword'); ?></p></font>
                                       <div class="par control-group">
                                    <label class="control-label" for="username">Username</label>
                                <div class="controls">  <?php 
                                             $data = array (
                                                    'name' => 'username',
                                                    'id' => 'username',
                                                    'required' => 'required',
                                                    'value' => $username,
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
                                                    'required' => 'required',
                                                    'value' => $password,
                                                    'class' => 'input-medium'
                                                );
                                             ?>
                                             <?=form_password($data);?></div>
                            </div>
                            <div class="control-group">
                                    <label class="control-label" for="cpassword">Confirm Password</label>
                                <div class="controls"><?php 
                                             $data = array (
                                                    'name' => 'cpassword',
                                                    'id' => 'cpassword',
                                                    'required' => 'required',
                                                    'value' => '',
                                                    'class' => 'input-medium'
                                                );
                                             ?>
                                             <?=form_password($data);?></div>
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
                                         echo form_dropdown('usertype', $options,(string)$var);
                                ?>
                                </div>
                                    </div>
                                </div>
                               


                                <div class="widgetbox personal-information">
                                    <h4 class="widgettitle">Personal Information</h4>
                                    <div class="widgetcontent">
                                        <div class="par control-group">
                                        <p>
                                            <label>First Name</label>

                                             <?php 
                                             $data = array (
                                                    'name' => 'firstname',
                                                    'id' => 'firstname',
                                                    'required' => 'required',
                                                    'value' => $fname,
                                                    'class' => 'input-xlarge'
                                                );
                                             ?>
                                             <?=form_input($data);?>
                                        </p>
                                        <p>
                                            <label>Middle Name</label>
                                            <?php 
                                             $data = array (
                                                    'name' => 'middlename',
                                                    'id' => 'middlename',
                                                    'value' => $mname,
                                                    'class' => 'input-xlarge'
                                                );
                                            ?>
                                            <?=form_input($data);?>
                                        </p>
                                        <p>
                                            <label>Last Name</label>
                                            <?php 
                                             $data = array (
                                                    'name' => 'lastname',
                                                    'required' => 'required',
                                                    'id' => 'lastname',
                                                    'value' => $lname,
                                                    'class' => 'input-xlarge'
                                                );
                                            ?>
                                            <?=form_input($data);?>
                                        </p>
                                        <p>
                                            <label>Address(Street)</label>
                                            <?php 
                                             $data = array (
                                                    'name' => 'address1',
                                                    'id' => 'address1',
                                                    'value' => $address1,
                                                    'class' => 'input-xlarge'
                                            );
                                            ?>
                                            <?=form_input($data);?>
                                        </p>
                                         <p>
                                            <label>Address(Brgy.)</label>
                                             <?php 
                                             $data = array (
                                                    'name' => 'address2',
                                                    'id' => 'address2',
                                                    'value' => $address2,
                                                    'class' => 'input-xlarge'
                                            );
                                            ?>
                                            <?=form_input($data);?>
                                        </p>
                                         <p>
                                            <label>Address(City)</label>
                                              <?php 
                                             $data = array (
                                                    'name' => 'address3',
                                                    'id' => 'address3',
                                                    'value' => $address3,
                                                    'class' => 'input-xlarge'
                                            );
                                            ?>
                                            <?=form_input($data);?>
                                        </p>

                            
                               
                            <label>Birthday ex:01/30/2014</label>
                                         <?php 
                                             $data = array (
                                                    'name' => 'birthday',
                                                    'value' => $birthday,
                                                    'id' => 'datepicker',
                                                    'class' => 'input-medium'
                                            );
                                            ?>
                                            <?=form_input($data);?>
                            <p>
                            <label>Gender</label>
                            <span class="formwrapper">
                            <?php 
                            if(isset($mal)){
                            $data = array (
                                'name' => 'gender',
                                'value' => 1,
                                'class' => 'input-medium',
                                'checked'=>set_radio('gender', 'Male', TRUE)
                                );
                            }
                            else
                            {
                               $data = array (
                                'name' => 'gender',
                                'value' => 1,
                                'class' => 'input-medium',
                                ); 
                            }
                            ?>
                            <?=form_radio($data);
                            echo "Male&nbsp; &nbsp;";
                            ?>
                            <?php 
                            if(isset($fem)){
                            $data = array (
                                'name' => 'gender',
                                'value' => 0,  
                                'checked'=>set_radio('gender', 'Female', TRUE),
                                'class' => 'input-medium'
                            );
                            }
                            else{
                                $data = array (
                                'name' => 'gender',
                                'value' => 0,
                                'class' => 'input-medium'
                            );
                            }
                            ?>
                            <?=form_radio($data);
                             echo "Female";
                            ?>
                            </span>
                            </p>
                            <p>
                             <label>Email</label>
                            <?php 
                                $data = array (
                                                'name' => 'email',
                                                'value' => $email,
                                                'id' => 'email',
                                                'class' => 'input-medium'
                                            );
                            ?>
                            <?=form_input($data);?>
                            </p>
                            <p>
                            <label>Contact</label>
                            <?php 
                                $data = array (
                                                'name' => 'contact',
                                                'value' => $contact,
                                                'id' => 'contact',
                                                'class' => 'input-medium'
                                            );
                            ?>
                            <?=form_input($data);?>
                            </p>
                         <p>
                          <label>Office</label>
                            <span class="formwrapper">
                                     <?php 
                                    $options=array();
                                    $query=mysql_query("SELECT * FROM lb_office WHERE is_archived=0");
                                    while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
                                        $options[$row['office_id']]= $row['office_code'];
                                    }
                                         echo form_dropdown('office',$options,$office,'style="width:150px"; class="chzn-select"; tabindex="2"; placeholder="Staff";');
                                ?>  
                            </span>
                    </p>
                    </div>
                    </div>
                                        </p>
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

<?=form_close();?>
</html>