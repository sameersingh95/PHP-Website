<?php
@session_start();
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
{
    header("location:index.php");
}
?>
<html>
<head>
<div><?php include 'color.php';?></div>
<div><?php include 'newpass1.php';?></div>
</head>
</html>