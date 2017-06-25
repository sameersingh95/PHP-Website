<?php
@session_start();
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
{
    header("location:index.php");
}
//$_SESSION['secure']=  substr(md5(rand(0,999)), 15, 5);
$_SESSION['secure']=  substr(md5(microtime()), 0, 5);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signanimate.css">
</head>
<body class="a">
    <div width="150" class="s">
        <center><img src="blogin.png"></center>
<form name="f1" method="POST" action="login.php">
<fieldset >
<legend>Enter Details
</legend>
<center>
<table cellspacing="10">
    <tr colspan="2"><td><input type="text" name="user" style="margin: 0px;border: none; border-radius: 3px; width: 195px; height: 25px;" value placeholder="Username"/></td></tr>
<tr colspan="2"><td><input type="password" name="pass" style="margin: 0px;border: none; border-radius: 3px; width: 195px; height: 25px;" value placeholder="Password"/></td></tr>
<tr><td><img src="gencaptcha.php"><a href="nsign.php"><img src="refresh.png" title="Refresh Captcha"height="45" width="45"></a></td></tr>
<tr><td><input type="text" name="secure" style="margin: 0px;border: none; border-radius: 3px; width: 195px; height: 25px;" value placeholder="Captcha"></td></tr>
<tr><td><input type="submit" class="buttons " name="submit" value="Sign In"/>
    <input type="reset" class="buttons" value="Reset" /></td></tr></table>
    <?php include 'index1.php';?>
    <!--<center><a href="index1.php"><img src='signin_button.png' height='50px' /></a></center>-->
    <pre><a href="forgotpass.php">Forgot Password?</a><a href="forgotuser.php">  Forgot Username?</a></pre>
</center>
</fieldset>
</form>
<center><a href="nsignup.php">New User?</a></center>
</div>
</body>
</html>