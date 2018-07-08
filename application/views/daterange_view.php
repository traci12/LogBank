<?php 
                                    $d1 = $data['date1'];
                                    $d2 = $data['date2'];
                                    $id = $data['uid'];

                                     // INSERT HERE THE VALUE OF DATEPICKER FROM AND TO AND THE SELECTED EMPLOYEE
                            $dtr = mysql_query("SELECT a.user_id, a.dtr_date, a.dtr_timein, a.dtr_timeout, b.fname, b.lname, c.office_desc, (TIME_TO_SEC(dtr_timeout) - TIME_TO_SEC(dtr_timein)) AS seconds FROM lb_dtrstaff a INNER JOIN lb_userinfo b on a.user_id=b.user_id INNER JOIN lb_office c ON b.office = c.office_id WHERE a.dtr_date BETWEEN '$d1' AND '$d2' AND a.user_id ='$id'");

                            $array = mysql_fetch_array($dtr);
							

?>
<input type="button" class="btn btn-primary" value="Print" onclick="PrintElem('#printdiv')" />
<br>
<div id="printdiv">
          <label class="control-label" for="firstname">Name: <?php echo $array[4]." " .$array[5];?></label>
                <?php echo $array[6];?><br><br>
				<?php echo "From ". date("M d Y", strtotime($d1)) ." to ".date("M d Y", strtotime($d2)); ?> 
<table id="dyntable" class="table table-bordered responsive">
                        <colgroup>
                            <col class="con0" style="align: center; width: 4%" />
                            <col class="con1" />
                            <col class="con0" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="head0 nosort"></th>
                                <th class="head1 center">Date</th>
                                <th class="head0 center">Time In</th>
                                <th class="head1 center">Time Out</th>
                                <th class="head1 center">No of Hours</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                       <?php

                               
                         
                         do
                                  { $convert_time = gmdate("H:i:s", $array[7]);
                                      echo "<tr class='gradeX'>
                                            <td class='center'><span class='center'>
                                            
                                            </span></td>
                                                <td class='center'>$array[1]</td>
                                                <td class='center'>$array[2]</td>
                                                <td class='center'>$array[3]</td>
												<td class='center'>$convert_time</td>
                                                </tr>";
                                  }while($array = mysql_fetch_array($dtr));

                                $total = mysql_query("SELECT user_id, (SUM( TIME_TO_SEC( dtr_timeout ) - TIME_TO_SEC( dtr_timein ) ))  AS minutes from lb_dtrstaff where dtr_date BETWEEN '$d1' AND '$d2' AND user_id = '$id'");
                                    
                                $tot = mysql_fetch_array($total);
                                 
                                 ?>

                                    <tr class="gradeX">
                                    <td class="aligncenter"><span class="center">
                                        </span>
                                    </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                <?php 
								$getHours = floor($tot[1]/3600);
								if ($getHours <= 0)
									{
										$getHours = 0;	
									}
								$remainH = $getHours*3600;
								
								$getMinutes = floor(($tot[1] - $remainH)/60);
								if ($getMinutes <= 0)
									{
										$getMinutes = 0;
									}
								$remainM = $getMinutes * 60;
								$getSeconds = floor($tot[1] - ($remainH + $remainM));
							
								?>
                                        <td align="center"><strong>Total: </strong>
                                            <p align="center">
                                                <strong><?php echo $getHours.":".$getMinutes.":".$getSeconds; ?></strong>
                                            </p></td>
                                    </tr>
                       
                    </tbody>
                </table>
                </div>