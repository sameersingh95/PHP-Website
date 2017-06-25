<?php
@session_start();
if(!isset($_SESSION['user_id']))
{
    header("location:signin.php");
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signanimate.css">
</head>
<body class="a">
    <div width="150" class="s">
        <center><img src="bedit.png" ></center>
<form name="f1" method="POST" action="update.php">
<fieldset>
<legend>Edit Account
</legend>
<center>
<table cellspacing="15">
<tr><td align="right">Name:</td><td><input type="text" style="margin: 0px;border: none; border-radius: 3px; width: 130px; height: 25px;"name="name" pattern="[A-Za-z]{1,25}" required title="Should be an alphabetical string of maximum 25 characters" value placeholder= "<?php echo $_SESSION['name'];?>" /></td></tr>
<tr><td align="right">Mobile:</td><td><input type="text" style="margin: 0px;border: none; border-radius: 3px; width: 130px; height: 25px;"maxlength="10" pattern="[7-9]{1}[0-9]{9}" required title="Not a valid mobile no." name="mobile" value placeholder= "<?php echo $_SESSION['mob'];?>"/></td></tr>
<!--<tr><td align="right">D.O.B:</td><td><input type="date" style="margin: 0px;border: none; border-radius: 3px; width: 130px; height: 25px;"name="dob" /></td></tr>-->
</table><input type="submit" class="buttons" name='submit' value="Change"/>
<input type="reset" class="buttons" value="Reset" />

</center>
</fieldset>
</form>
 <center><a href='npass1.php'>Change Password</a></center>
</div>
</body>
</html>
