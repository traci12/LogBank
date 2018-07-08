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

<?=form_open('e_checklist/updateChecklist');?>
<?=form_hidden('id', $checklistinfo['id']);?>
    <div class="widgetbox box-inverse">
    <h4 class="widgettitle">Edit Checklist</h4>
                <div class="widgetcontent wc1">
    				<?php 
$sid = $checklistinfo['id'];

$sid2 = mysql_fetch_array(mysql_query("select * from lb_act_type join lb_office on lb_act_type.office_id = lb_office.office_id where lb_act_type.inc_id='$sid'"));
   $var = $sid2[2];
   $var2 = $sid2['office_id'];

      
     ?>
                            <div align="center">
                                <div class="controls">
                                     <label class="control-label" for="time">Time</label>
                              <?php 
                                    $options=array(
                                        
                                        '1' => 'Anytime',
                                        '2' => 'Evening',
                                        '3' => 'Weekend',
                                        );
                                         echo form_dropdown('time',$options,'','style="width:150px"; class="chzn-select"; tabindex="2"');
                                ?>
                                   
                                </div>
                            
                                <div class="par control-group">
                                    <label class="control-label" for="office">Office</label>
                                <?php 
                                    $options=array();
                                    $query=mysql_query("SELECT * FROM lb_office WHERE is_archived=0");
                                    while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
                                        $options[$row['office_id']]= $row['office_code'];
                                    }
                                         echo form_dropdown('office',$options,$checklistinfo['office_id'],'style="width:150px"; class="chzn-select"; tabindex="2"; placeholder="Staff";');
                                ?>  
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="office description">Checklist</label>
                                   
                                    <?php 
                                $data = array (
                                                'name' => 'checklist',
                                                'id' => 'checklist',
                                                'class' => 'input-xxllarge',
                                                'rows' => '2',
                                                'cols' => '2',
                                                'required' => 'required',
                                                'value' => $sid2[1]
                                            );
                            ?>
                            <?=form_textarea($data);?>
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