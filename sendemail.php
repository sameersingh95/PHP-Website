<?php
@session_start();
if(!isset($_SESSION['user_id'])&&empty($_SESSION['user_id']))
{
    header("location:nsign.php");
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signanimate.css">
</head>
<body class="a">
    <div width="150" class="s">
        <center><img src="bquery.png"></center>
<form name="f1" method="POST" action="email.php">
<fieldset>
<legend>Enter Details
</legend>
<center>
<table cellspacing="10">
<tr><td>Subject:</td><td><input type="text" name="subject" style="margin: 0px; border: none; border-radius: 3px; width: 300px; height: 25px" value placeholder="Specify Exact Problem"/></td></tr>
<tr><td>Message:</td><td><textarea name="message" cols="40" rows="5" maxlength="200" style="margin: 0px; border: none; border-radius: 3px;" value placeholder="Max 200 Characters"></textarea></td></tr>
</table>
<input type="submit" class="buttons" name="submit" value="Send"/>
    <input type="reset" class="buttons" value="Reset" />
<br/>
</center>
</fieldset>
</form>

</div>
</body>
</html>