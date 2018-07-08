<!--eto-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">


a { 
	text-decoration:none; 
	color:#00c6ff;
}

h1 {
	font: 4em normal Arial, Helvetica, sans-serif;
	padding: 20px;	margin: 0;
	text-align:center;
}

h1 small{
	font: 0.2em normal  Arial, Helvetica, sans-serif;
	text-transform:uppercase; letter-spacing: 0.2em; line-height: 5em;
	display: block;
}

h2 {
    font-weight:700;
    color:#bbb;
    font-size:20px;
}

h2, p {
	margin-bottom:10px;
}

@font-face {
    font-family: 'BebasNeueRegular';
    src: url('BebasNeue-webfont.eot');
    src: url('BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
         url('BebasNeue-webfont.woff') format('woff'),
         url('BebasNeue-webfont.ttf') format('truetype'),
         url('BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
    font-weight: normal;
    font-style: normal;

}

.container {width: 960px; margin: 0 auto; overflow: hidden;}

.clock {width:800px; margin:0 auto; padding:30px; border:1px solid #333; color:#fff; }

#Date { font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; font-size:36px; text-align:center; text-shadow:0 0 5px #00c6ff; }

ul { width:800px; margin:0 auto; padding:0px; list-style:none; text-align:center; }
ul li { display:inline; font-size:10em; text-align:center; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; text-shadow:0 0 5px #00c6ff; }

#point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; padding-left:10px; padding-right:10px; }

@-webkit-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }	
}


@-moz-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }	
}

</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="./Resources/js/jquery-1.8.3.js"></script>
<script src="./Resources/js/speakClient.js"></script>
<script type="text/javascript">
setInterval(function() {
	    
          fnCapture(0);
    }, 1000);

var aaa = 0;
function fnOpenDevice()
{
	for ( i=0; i<1; i++)
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
		
         // window.location = 'compare.php?bio_id=5&strmin='+strmin;
		  
		  
		   $.ajax({                                      
                    url: './application/controllers/compare.php',                  //the script to call to get data          
                    //data: "",                       
                    dataType: 'json',                //data format      
                    success: function(data){
		var a= data;
		var st="false";
		for (var i = 0; i < a.length; i++) {
			var b = a[i];
			var q1 = b[0];
			var q2 = b[1];
			var q3 = b[2];
			var q4 = b[3];

		if ((objVerify.VerifyForText(strmin, q1)) && objVerify.ErrorCode == 0){
		st = "true"
		$('#hidden-div').load('./Resources/include/timeintimeout.php?uid='+b[5]);
		}else if((objVerify.VerifyForText(strmin, q2)) && objVerify.ErrorCode == 0){
		st = "true"
		$('#hidden-div').load('./Resources/include/timeintimeout.php?uid='+b[5]);
		}else if((objVerify.VerifyForText(strmin, q3)) && objVerify.ErrorCode == 0){
		st = "true"
		$('#hidden-div').load('./Resources/include/timeintimeout.php?uid='+b[5]);
		}else if((objVerify.VerifyForText(strmin, q4)) && objVerify.ErrorCode == 0){
		st = "true"
		$('#hidden-div').load('./Resources/include/timeintimeout.php?uid='+b[5]);
		}
		}


		if(st=="true"){
		document.getElementById('hidden-div').style.display = 'block';
		document.getElementById('tohide').style.display = 'none';		
		
	}else{
	alert("No record found!\nTry again!");
	}
	
	}
					});
	return;
	}
	
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
.hidden-div {
    display:none
}
</style>
</head>
<body align="center" onLoad="fnOpenDevice();">
<center>
<form name="frmmain">			  
			  <OBJECT id=objVerify style="LEFT: 0px; TOP: 0px" height=0 width=0 classid="CLSID:8D613732-7D38-4664-A8B7-A24049B96117" 	name=objVerify VIEWASTEXT></OBJECT>

<div class="hidden-div" id="hidden-div" width=100% height="60px">

</div>
<div id="tohide">
<table border=1 cellspacing=0 cellpadding=0>
<tr>
<td>
	<OBJECT id=objFP style="LEFT: 0px; WIDTH: 129px; TOP: 0px; HEIGHT: 162px" height=150 
		width=100 classid="CLSID:D547FDD7-82F6-44e8-AFBA-7553ADCEE7C8" name=objFP VIEWASTEXT>
	<PARAM NAME="CodeName" VALUE="1">
	</OBJECT>
</td>
<td>
	<OBJECT hidden id=objFP style="LEFT: 0px; WIDTH: 129px; TOP: 0px; HEIGHT: 162px" height=150 
		width=100 classid="CLSID:D547FDD7-82F6-44e8-AFBA-7553ADCEE7C8" name=objFP VIEWASTEXT>
	<PARAM NAME="CodeName" VALUE="1">
	</OBJECT>
</td>
</tr>
<tr>
<td align=center><input type=button name=btnCapture1 value='Capture' OnClick='fnCapture(0);' hidden></td>
</tr>
</table>
</div>
<input type=hidden name=min id="bio1">
<!--<input type=button name=btnRegister value='Register' OnClick='fnRegister();' style='width:200px'>
<br>
<input type=button name=btnVerify value='VerifyEx' OnClick='fnVerifyEx();' style='width:200px'>
<br>
<input type=button name=btnVerify value='Verify' OnClick='fnVerify();' style='width:200px'>-->
</form>
</center>
</div>
</body>
</html>
