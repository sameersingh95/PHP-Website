<?php
$current=$_SERVER['SCRIPT_NAME'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signanimate.css">
</head>
<body class="a">
    <div width="150" class="s">
        <center><img src="bforgot.png" ></center>
    <form name="f1" method="POST" action="<?php echo $current; ?>">
<fieldset>
<legend>Enter Email
</legend>
<center>
<table cellspacing="15"><tr><td>
    <tr><td><input type="email" name="email" style="margin: 0px;border: none; border-radius: 3px; width: 300px; height: 25px;" value placeholder="Email"/></td></tr></table>
&nbsp<input type="submit" name="submit" class="buttons" value="Submit"/></td>
<td><input type="reset" class="buttons" value="Reset" />
</center>
</fieldset>
</form>
<center><a href="nsign.php">Login to continue..!!</a></center>
</div>
</body>
</html>