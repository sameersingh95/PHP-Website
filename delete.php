<?php
include 'connect.php';
if(isset($_POST['Yes'])){
    session_start();
    global $conn;
    $result=  mysqli_query($conn, "delete from users where id='".$_SESSION["user_id"]."'");
    $name=  mysqli_query($conn, "Select * from images where user_id='".$_SESSION['user_id']."'");
    
    if($result )
    {
        while($filename=  mysqli_fetch_array($name))
        {
            $image=$filename['images'];
            $thumb=$filename['thumbnail'];
            $water=$filename['watermark'];
            if(file_exists('original/'.$image))
            {
                unlink('original/'.$image);
            }
            if(file_exists('thumbnails/'.$thumb))
            {
                unlink('thumbnails/'.$thumb);
            }
            if(file_exists('uploads/'.$water))
            {
                unlink('uploads/'.$water);
            }
        }
        if($row=  mysqli_query($conn, "delete from images where user_id='".$_SESSION['user_id']."'")){
            if($rev=  mysqli_query($conn, "delete  from review where user_id='".$_SESSION['user_id']."'")){
        echo "<script>alert('Your account has been deleted..!!')</script>";
        header('location:logout.php');
        }}else{
        echo "<script>alert('There was some error,Try after some time..!!')</script>";
        header('location:ndetails.php');
        }
    
}
}
if(isset($_POST['No']))
{
    echo "<script>alert('Good then..!!')</script>";
        header('location:ndetails.php');
}
?>
<head>
<title>About me</title>
<link rel="stylesheet" type="text/css" href="deletecss.css">
</head>
<div style="height:20px "><?php include 'logincheck.inc.php'; ?></div>
<div>
    <center><h3><span style="color: red; font-family: verdana">Do you really want to delete your account...???</span></h3>
        <form name="f" action="ndelete.php" method="POST">
            <input type="submit" class="button button3" value="Yes" name="Yes">
        <input type="submit"  class="button button1" value="No" name="No">
    </form>
    </center>
</div>