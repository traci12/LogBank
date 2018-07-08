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
<title>LOGBANK - SYSTEM SETUP</title>
<?php 
    include('./Resources/include/Resources2.php');
?>
</head>
 <?=form_open('e_staff/updateProfile'); ?>
    <?=form_hidden('uid', $uid);?>
    <form id="form1" class="stdform" method="post">
    <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Basic Information</h4>
                <div class="widgetcontent wc1">
<?php 
$sid = $uid;


$sid2 = mysql_fetch_array(mysql_query("select * from lb_userinfo where user_id = $sid"));
$sid3 = mysql_fetch_array(mysql_query("select * from lb_user where user_id = $sid"));

    
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
                            <div class="par control-group">
                            <font color="#FF6600"><p><?php echo form_error('cpassword'); ?></p></font>
                                    <label class="control-label" for="firstname">First Name</label>
                                <div class="controls"><?php 
                                             $data = array (
                                                    'name' => 'firstname',
                                                    'id' => 'firstname',
                                                    'value' => $fname,
                                                    'class' => 'input-xlarge'
                                                );
                                             ?>
                                             <?=form_input($data);?></div>
                            </div>                 
                            <div class="control-group">
                                    <label class="control-label" for="lastname">Last Name</label>
                                <div class="controls"><?php 
                                             $data = array (
                                                    'name' => 'lastname',
                                                    'id' => 'lastname',
                                                    'value' => $lname,
                                                    'class' => 'input-xlarge'
                                                );
                                            ?>
                                            <?=form_input($data);?></div>
                            </div>
                            <div class="par control-group">
                                    <label class="control-label" for="middlename">Middle Name</label>
                                <div class="controls"><?php 
                                             $data = array (
                                                    'name' => 'middlename',
                                                    'id' => 'middlename',
                                                    'value' => $mname,
                                                    'class' => 'input-xlarge'
                                                );
                                            ?>
                                            <?=form_input($data);?></div>
                            </div>
                            
                            <div class="par control-group">
                                    <label class="control-label" for="Address(Street)">Address(Street)</label>
                                <div class="controls"><?php 
                                             $data = array (
                                                    'name' => 'address1',
                                                    'id' => 'address1',
                                                    'value' => $address1,
                                                    'class' => 'input-xlarge'
                                            );
                                            ?>
                                            <?=form_input($data);?></div>
                                    <label class="control-label" for="Address(Barangay)">Address(Barangay)</label>
                                <div class="controls"><?php 
                                             $data = array (
                                                    'name' => 'address2',
                                                    'id' => 'address2',
                                                    'value' => $address2,
                                                    'class' => 'input-xlarge'
                                            );
                                            ?>
                                            <?=form_input($data);?></div>
                                    <label class="control-label" for="Address(City)">Address(City)</label>
                                <div class="controls"><?php 
                                             $data = array (
                                                    'name' => 'address3',
                                                    'id' => 'address3',
                                                    'value' => $address3,
                                                    'class' => 'input-xlarge'
                                            );
                                            ?>
                                            <?=form_input($data);?></div>                                
                            </div>
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
                    
                    </div>
                    </div>
                    
    <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Account Information</h4>
                <div class="widgetcontent wc1">
               
                            <div class="par control-group">
                                    <label class="control-label" for="username">Username</label>
                                <div class="controls"><?php 
                                             $data = array (
                                                    'name' => 'username',
                                                    'id' => 'username',
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
                                                    'value' => $password,
                                                    'required' => 'required',
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
                                             <?=form_password($data);?><span id='message'></span></div>
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
                    </div>
                    </form>

                   </body>

  
<?form_close()?>
                   
</html>