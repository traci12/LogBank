<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>LOGBANK</title>
<?php 
    include('./Resources/include/Resources.php');
?>
<?php 
    echo form_open('verifylogin');
?>
</head>

<body class="loginpage">

<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo animate0 bounceIn"><img src="./Resources/images/logo.png" alt="" /></div>
        <form id="login" action="#" method="post">
            <div class="inputwrapper animate1 bounceIn">
                <div><font color="#FF6600"><h5><?php echo form_error('username'); ?></h5></font></div>
            </div>
            <div class="inputwrapper animate1 bounceIn">
                <input autocomplete='off' type="text" name="username" id="username" placeholder="Enter any username" />
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <div><font color="#FF6600"><h5><?php echo form_error('password'); ?></h5></font></div>
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input autocomplete='off' type="password" name="password" id="password" placeholder="Enter any password" />
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <button name="submit">Sign In</button>
            </div>
            <div class="inputwrapper animate4 bounceIn">
                <label><input type="checkbox" class="remember" name="signin" /> Keep me sign in</label>
            </div>
            
        </form>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->

<div class="loginfooter">
    <p>&copy; 2014. Diliman Interactive Learning Center. All Rights Reserved.</p>
</div>

</body>
</html>
