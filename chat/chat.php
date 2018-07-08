
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="js/jScrollPane/jScrollPane.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/chat.css" />
</head>

<body>

    <div id="chatTopBar" class="rounded"></div>
    <div id="chatLineHolder"></div>
    
    <!--<div id="chatUsers" class="rounded"></div>-->
    <div id="chatBottomBar" class="rounded">
    	<div class="tip"></div>
        
        <form id="loginForm" method="post" action="">
            <input id="name" name="name" class="rounded" maxlength="16" value="<?php echo $_GET['name'];?>" />
            <input id="email" name="email" class="rounded" value="<?php echo $_GET['email'];?>"/>
	    <input type="hidden" name="uid" value="<?php echo $_GET['uid'];?>" />
            <input type="submit" class="blueButton" id="logB" value="Login" />
        </form>
        
        <form id="submitForm" method="post" action="">
            <input id="chatText" name="chatText" class="rounded" maxlength="255" />
	    <input type="hidden" name="uid" value="<?php echo $_GET['uid'];?>" />
            <input type="submit" class="blueButton" value="Submit" />
        </form>
    </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jScrollPane/jquery.mousewheel.js"></script>
<script src="js/jScrollPane/jScrollPane.min.js"></script>
<script src="js/script.js"></script>
<script>
$("document").ready(function() {
        $("#loginForm").submit();
});
</script>
</body>
</html>
