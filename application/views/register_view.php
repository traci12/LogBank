<?php 
$sid = $id;
?>

<?php
if(isset($_POST['submit']))
{
$a = $_POST['accept'];
$b = $_POST['ok1'];
if($a == 'on' && $b == 'on')
{
	
	$c = $_POST['username'];
	$d = $_POST['password'];
	$e = $_POST['cpassword'];
	if($c != '' && $d !='' && $e != '')
	{
	if($d == $e)
	{
		
		mysql_query("insert into lb_user (username, password, is_active, user_type_id) values ('$c', '$d', 1, 2)");
		
		echo "<script>alert('Registration successful.')</script>";
		echo "<script>window.location.href=winodw.opener.location='s_staff.php'=</script>";
		echo "<script>window.close();</script>";
	
	}
	else
	{
		echo "<script>alert('password did not match')</script>";
		echo "<script>window.location.replace('register.php')</script>";
	}
	}
	else
	{
		echo "<script>alert('please fill up all the required fields')</script>";
		echo "<script>window.location.replace('register.php')</script>";
	}
}
else
{
	echo "<script>alert('please make sure that your information are correct and accept the terms and condition of this service')</script>";
	echo "<script>window.location.replace('index.php')</script>";
}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type='text/javascript'>
function save(){
		  var sid= '<?php echo $sid; ?>'
		  var min1= document.getElementById('bio1').value;
		  var min2= document.getElementById('bio2').value;
		  var min3= document.getElementById('bio3').value;
		  var min4= document.getElementById('bio4').value;
		 if(min1.toString().length==0&&min2.toString().length==0&&min3.toString().length==0&&min4.toString().length==0){
		 	alert("Failed");
		 }
		 else
		 {
          	goUrl = '/logbank/saveBio/registerBio/'+min1+'/'+min2+'/'+min3+'/'+min4+'/'+sid;
          	window.location.replace(goUrl);
      	}
}
var aaa = 0;
function fnOpenDevice()
{
	for ( i=0; i<4; i++)
	{
		document.frmmain.objFP[i].DeviceID = -1;
		document.frmmain.objFP[i].CodeName = 2;
		document.frmmain.objFP[i].MinutiaeMode = 256;
	}

	// template format of objVerify should be the same to those of objFP[]
	objVerify.MinutiaeMode = 256;
	return;
}

function fnCapture(idx)
{
	document.frmmain.objFP[idx].Capture();
	var result = document.frmmain.objFP[idx].ErrorCode;
	if (result == 0)
	{	
		//var strimg1 = objFP.ImageTextData;
	
		var strmin = document.frmmain.objFP[idx].MinTextData;
		document.frmmain.min[idx].value = strmin;
	}
	else
		alert('failed - ' + result);

	return;
}

function fnRegister()
{
	var strmin1 = document.frmmain.min[0].value;
	var strmin2 = document.frmmain.min[1].value;

	if ( objVerify.RegisterForText(strmin1, strmin2) && objVerify.ErrorCode == 0 )
		alert('success- registered');
	else
		alert('failed - ' + objVerify.ErrorCode);
		
	return;
}

function fnVerifyEx()
{	
	var strmin1 = document.frmmain.min[0].value;
	var strmin2 = document.frmmain.min[1].value;
	var strmin3 = document.frmmain.min[2].value;

	if ( objVerify.VerifyExForText(strmin1, strmin2, strmin3) && objVerify.ErrorCode == 0)
		alert('Success - matched');
	else
		alert('Failed - ' + objVerify.ErrorCode);
	
	return;
}

function fnVerify()
{	
	var strmin1 = document.frmmain.min[0].value;
	var strmin2 = document.frmmain.min[2].value;

	if ( objVerify.VerifyForText(strmin1, strmin2) && objVerify.ErrorCode == 0 )
		alert('Success - matched');
	else
		alert('Failed - ' + objVerify.ErrorCode);
	
	return;
}

function fnSetimage()
{
	document.frmmain.objFP.ImageTextData = document.frmmain.img1.value;

	return;
}


</script>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:455px;
	height:261px;
	z-index:1;
	left: 282px;
	top: 170px;
	visibility: inherit;
	background-color: #CCCCCC;
}
</style>
</head>
<body align="center" onLoad="fnOpenDevice();">

 

<div class="col1-2 lastcol">
 <table width="400px" border="0">
 
    <tr>
      <td colspan="3">
        <table width="400px" border="0">
     
          
          <tr>
            <td height="220" colspan="3" bgcolor="#CCCCCC"><div class="notification note-success">
              <p><strong>Registration of Thumbmark</strong></p>
			  
<form name="frmmain" method="post">			  
			  <OBJECT id=objVerify style="LEFT: 0px; TOP: 0px" height=0 width=0 classid="CLSID:8D613732-7D38-4664-A8B7-A24049B96117" 	name=objVerify VIEWASTEXT></OBJECT>


<table border=1 cellspacing=0 cellpadding=0>
<tr>
<td>
	<OBJECT id=objFP style="LEFT: 0px; WIDTH: 149px; TOP: 0px; HEIGHT: 182px" height=150 
		width=100 classid="CLSID:D547FDD7-82F6-44e8-AFBA-7553ADCEE7C8" name=objFP VIEWASTEXT>
	<PARAM NAME="CodeName" VALUE="1">
	</OBJECT>
</td>
<td>
	<OBJECT id=objFP style="LEFT: 0px; WIDTH: 149px; TOP: 0px; HEIGHT: 182px" height=150 
		width=100 classid="CLSID:D547FDD7-82F6-44e8-AFBA-7553ADCEE7C8" name=objFP VIEWASTEXT>
	<PARAM NAME="CodeName" VALUE="1">
	</OBJECT>
</td>
<td>
	<OBJECT id=objFP style="LEFT: 0px; WIDTH: 149px; TOP: 0px; HEIGHT: 182px" height=150 
		width=100 classid="CLSID:D547FDD7-82F6-44e8-AFBA-7553ADCEE7C8" name=objFP VIEWASTEXT>
	<PARAM NAME="CodeName" VALUE="1">
	</OBJECT>
</td>
<td>
	<OBJECT id=objFP style="LEFT: 0px; WIDTH: 149px; TOP: 0px; HEIGHT: 182px" height=150 
		width=100 classid="CLSID:D547FDD7-82F6-44e8-AFBA-7553ADCEE7C8" name=objFP VIEWASTEXT>
	<PARAM NAME="CodeName" VALUE="1">
	</OBJECT>
</td>
</tr>

<tr>
<td align=center><input type=button name=btnCapture1 value='Capture' OnClick='fnCapture(0);'></td>
<td align=center><input type=button name=btnCapture2 value='Capture' OnClick='fnCapture(1);'></td>
<td align=center><input type=button name=btnCapture3 value='Capture' OnClick='fnCapture(2);'></td>
<td align=center><input type=button name=btnCapture4 value='Capture' OnClick='fnCapture(3);'></td>
</tr>
<tr>
<td><img src='/logbank/Resources/images/left-index.jpg' class='icon16 fl-space2' alt='' title='Left Index'></td>
<td><img src='/logbank/Resources/images/left-thumb.jpg' class='icon16 fl-space2' alt='' title='Left Thumb'></td>
<td><img src='/logbank/Resources/images/right-thumb.jpg' class='icon16 fl-space2' alt='' title='Right Thumb'></td>
<td><img src='/logbank/Resources/images/right-index.jpg' class='icon16 fl-space2' alt='' title='Right Index'></td>
</tr>
</table>
<input type=hidden name=min id="bio1">
<input type=hidden name=min id="bio2">
<input type=hidden name=min id="bio3">
<input type=hidden name=min id="bio4">
<br>
<center>
<input type="button" onClick="save();" value="Save"></center>
<!--<input type=button name=btnRegister value='Register' OnClick='fnRegister();' style='width:200px'>
<br>
<input type=button name=btnVerify value='VerifyEx' OnClick='fnVerifyEx();' style='width:200px'>
<br>
<input type=button name=btnVerify value='Verify' OnClick='fnVerify();' style='width:200px'>-->
</form>
			  
			 
			  
			  </div>

              </p></td>
          <tr>
          <td>&nbsp;</td></tr>
          <tr>
           
          </tr>
        </table>
    </table>
</div>
</body>
</html>
