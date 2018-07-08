<link rel="stylesheet" href="./Resources/css/style.palegreen.css" type="text/css" /><?php 
$office_id=$officeinfo['id'];
$office_code=$officeinfo['office_code'];
$office_desc=$officeinfo['office_desc'];
$room_no=$officeinfo['room_no'];
$building=$officeinfo['building'];
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

<body>
 <?=form_open('e_office/updateOffice'); ?>
<?=form_hidden('id', $office_id);?>
    <div class="widgetbox box-inverse">
    <h4 class="widgettitle">Edit Office</h4>
                <div class="widgetcontent wc1">

                            <div align="center">
                                <div class="controls">
                                     <label class="control-label" for="building">Building</label>
                                     <?php 
                                             $data = array (
                                                    'name' => 'building',
                                                    'id' => 'building',
                                                    'required' => 'required',
                                                    'value' => $building,
                                                    'class' => 'input-medium'
                                                );
                                             ?>
                                             <?=form_input($data);?>
                                </div>
                            
                                <div class="par control-group">
                                    <label class="control-label" for="office code">Office Code</label>
                                    <?php 
                                             $data = array (
                                                    'name' => 'ofcode',
                                                    'id' => 'ofcode',
                                                    'required' => 'required',
                                                    'value' => $office_code,
                                                    'class' => 'input-medium'
                                                );
                                             ?>
                                             <?=form_input($data);?>
                                
                                <div class="control-group">
                                    <label class="control-label" for="office description">Office Description</label>
                                    <?php 
                                             $data = array (
                                                    'name' => 'ofdesc',
                                                    'id' => 'ofdesc',
                                                    'required' => 'required',
                                                    'value' => $office_desc,
                                                    'class' => 'input-medium'
                                                );
                                             ?>
                                             <?=form_input($data);?>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="room number">Room Number</label>
                                          <?php 
                                             $data = array (
                                                    'name' => 'room_no',
                                                    'id' => 'room_no',
                                                    'required' => 'required',
                                                    'value' => $room_no,
                                                    'class' => 'input-medium'
                                                );
                                             ?>
                                             <?=form_input($data);?>
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
    </div>
    </div>
<?=form_close()?>
</body>


</html>




































