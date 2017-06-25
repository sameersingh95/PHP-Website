<?php
//include 'logincheck.inc.php';
//include 'imageupload.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>About me</title>
<link rel="stylesheet" type="text/css" href="ext1.css">

</head>
<body >
    <div style="height:20px "><?php include 'logincheck.inc.php'; ?></div>
    <div style="float:left; width:50%"><?php include 'imageupload.php'; ?></div>
    <div style="float: right; width: 50%">
    <blockquote>
	
	<?php
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
	{
            if(strlen($_SESSION['user_id'])==21)//google login id
            {
                echo"<table cellpadding='10'><tr>";
	echo"<td>NAME:</td><td>". $_SESSION['name'] ."</td></tr>";
	//echo"<tr><td>USERNAME:</td><td>". $_SESSION['user'] ."</td></tr>";
	echo"<tr><td>EMAIL:</td><td><img src='generateimage.php'></td></tr>";
        //echo"<tr><td>URL:</td><td>". $_SESSION['url'] ."</td><tr>";
        //echo"<tr><td>URL:</td><td>". $_SESSION['purl'] ."</td><tr>";
	//echo"<tr><td>DOB:</td><td>". $_SESSION['dob'] ."</td><tr>";
	//echo"<tr><td>MOBILE:</td><td>". $_SESSION['mob'] ."</td>";
	echo"</tr></table>";
            }else{
                echo"<table cellpadding='10'><tr>";
	echo"<td>NAME:</td><td>". $_SESSION['name'] ."</td></tr>";
	echo"<tr><td>USERNAME:</td><td>". $_SESSION['user'] ."</td></tr>";
	echo"<tr><td>EMAIL:</td><td><img src='generateimage.php'></td></tr>";
	//echo"<tr><td>DOB:</td><td>". $_SESSION['dob'] ."</td><tr>";
	echo"<tr><td>MOBILE:</td><td>". $_SESSION['mob'] ."</td>";
	echo"</tr></table>";
            }
		
	echo"<a href='nedit.php'>Edit Details</a>&nbsp&nbsp<a href='nreview.php'>Submit a Review</a>";
        if($_SESSION['email']=="admin@gmail.com"){
            echo "<br><a href='nadmin.php'>Delete Users Accounts</a>";
        }else
        {
            echo "<br><a href='ndelete.php'>Delete Your Account</a>";
        }
        echo "       <a href='nsendemail.php'>Send Mail</a>";
	}
        ?>
    </blockquote></div>
	</body>
	</html>