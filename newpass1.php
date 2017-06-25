<?php 
@session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signanimate.css">
</head>
<body class="a">
    <div width="150" class="s">
    <center><img src="button_change-password.png" ></center>
<form name="f1" method="POST" action="token.php">
<fieldset>
<legend>Enter Details
</legend>
<center>
<table cellspacing="15"><tr><td><input type="number" name="token" style="margin: 0px; width: 200px; height: auto" value placeholder= "Token" /></td></tr>
<tr><td><input type="text" name="email" pattern="[A-Za-z0-9.!@#%&*-_+=:;'/?<>]{1,}[@]{1}[a-z]{1,}[.]{1}[a-z.]{1,}" style="margin: 0px; width: 200px; height: auto" required title="Invalid email" type="text" value placeholder="Email ID"/></td></tr>
<tr><td><input type="password" name="pass" type="password" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,15}" style="margin: 0px; width: 200px; height: auto" required title="Invalid Password, password must contain 5 to 15 characters which contain at least one numeric digit and a special character" value placeholder="Password"/></td></tr>
<tr><td><input type="password" name="pass1" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,15}" style="margin: 0px; width: 200px; height: auto" required title="Invalid Password, password must contain 5 to 15 characters which contain at least one numeric digit and a special character" value placeholder= "Re-Enter Password"/></td></tr>
</table>

<br/>
<input type="submit" class="button button5" name='submit' value="Change"/>
    <input type="reset" class="button button5" value="Reset" />

</center>
</fieldset>
</form>
</div>
    <div align="center">
        <?php
if(isset($_SESSION['changed']))
{
	echo"<a href='index.php'>Click here to login</a>";
}
else{
    echo 'Change password to login';
}

?>
    </div>
</body>
</html>
