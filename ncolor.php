<?php @session_start(); ?>
<html>
<head>
<title>HTML TUTORIALS</title>
<link rel="stylesheet" type="text/css" href="extncolor.css">
</head>
<body >
    <div class="all">
    <div class="clear" ><h2 class="c"><a href="index.php" >HTML AND CSS TUTORIALS</a></h2></div>
    <div  class="right" align="right">
		
	<?php
		if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
		{	
			echo "<a href='ndetails.php'><button class='button' style='vertical-align:middle'><span>".$_SESSION['name']."</span></button></a>|<a href='logout.php'><button class='button' style='vertical-align:middle'><span>Log Out</span></button></a>";
		}
		else
		{
			echo "<a href='nsign.php'><button class='button' style='vertical-align:middle'><span>Log In</span></button></a>&nbsp|&nbsp<a href='nsignup.php'><button class='button' style='vertical-align:middle'><span>Sign Up</span></button></a>";
		}
	?>
    </div></div>
</body>
</html>


