<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signanimate.css">
</head>
<body class="a">
<div class="s">
    <center><img src="bpass.png" ></center>
<form name="f1" method="POST" action="pass.php">
<fieldset>
<legend>Enter Details
</legend>
<center>
<table cellspacing="15"><tr><td>
<tr><td><input type="password" name="pass1" style="margin: 0px;border: none; border-radius: 3px; width: 200px; height: 25px;" value placeholder="Current Password"/></td></tr>
<tr><td><input type="password" name="npass" style="margin: 0px;border: none; border-radius: 3px; width: 200px; height: 25px;"pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,15}" style="margin: 0px; width: 200px; height: auto" required title="Invalid Password, password must contain 5 to 15 characters which contain at least one numeric digit and a special character" value placeholder="New-Password"/></td></tr>
<tr><td><input type="password" name="rnpass" style="margin: 0px;border: none; border-radius: 3px; width: 200px; height: 25px;"pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,15}" style="margin: 0px; width: 200px; height: auto" required title="Invalid Password, password must contain 5 to 15 characters which contain at least one numeric digit and a special character" value placeholder="Repeat-Password"/></td></tr>
</table><input type="submit" name="submit" class="buttons" value="Change"/>
<input type="reset" class="buttons" value="Reset" />
</center>
</fieldset>
</form>
</div>
</body>
</html>
