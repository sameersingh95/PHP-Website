<?php
@session_start();
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
{
    header("location:index.php");
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signanimate.css">
</head>
<body>
<div width="150" class="s">
    <center><img src="bsignup.png" ></center>
<form name="f1" method="POST" action="register.php">
<fieldset>
<legend>Enter Details
</legend>
<center>
<table cellspacing="15">
<tr><td><input type="text" style="margin: 0px;border: none; border-radius: 3px; width: 200px; height: 25px;"name="name" pattern="[A-Za-z]{1,25}" required title="Should be an alphabetical string of maximum 25 characters" value placeholder= "Name" /></td></tr>
<tr><td><input type="text" style="margin: 0px;border: none; border-radius: 3px; width: 200px; height: 25px;"name="email" pattern="[A-Za-z0-9.!@#%&*-_+=:;'/?<>]{1,}[@]{1}[a-z]{1,}[.]{1}[a-z.]{1,}" required title="Invalid email" type="text" value placeholder="Email ID"/></td></tr>
<tr><td><input type="text" style="margin: 0px;border: none; border-radius: 3px; width: 200px; height: 25px;"maxlength="10" pattern="[7-9]{1}[0-9]{9}" required title="Not a valid mobile no." name="mobile" value placeholder= "Mobile"/></td></tr>
<!--<tr><td><input type="date" style="margin: 0px;border: none; border-radius: 3px; width: 200px; height: 25px;"name="dob" /></td></tr>-->
<tr><td><input type="text" style="margin: 0px;border: none; border-radius: 3px; width: 200px; height: 25px;"name="username" pattern="[A-Za-z0-9]{5,25}" required title="Must be an alphanumeric string of 5-25 characters" type="text" value placeholder= "Username"/></td></tr>
<tr><td><input type="password" style="margin: 0px;border: none; border-radius: 3px; width: 200px; height: 25px;"name="pass"  pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,15}" required title="Invalid Password, password must contain 5 to 15 characters which contain at least one numeric digit and a special character" value placeholder="Password"/></td></tr>
<tr><td><input type="password" style="margin: 0px;border: none; border-radius: 3px; width: 200px; height: 25px;"name="pass1" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,15}" required title="Invalid Password, password must contain 5 to 15 characters which contain at least one numeric digit and a special character" value placeholder= "Re-Enter Password"/></td></tr>
<tr><td><input type="submit" class="buttons" name='submit' value="Sign Up"/>
    <input type="reset" class="buttons" value="Reset" /></td></tr>
</table>
</center>
</fieldset>
</form>
<center><a href="nsign.php" >Existing User?</a></center> 
</div>
</body>
</html>