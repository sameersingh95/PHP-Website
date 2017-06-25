<?php
session_start();
include 'connect.php';
global $conn;
header("Content-type: image/jpeg");
/*$query="Select email from users where email='".$_POST['email']."'";
if($result=  mysqli_query($conn, $query))
{
if(mysqli_num_rows($result)==1)
{
    $row=  mysqli_fetch_array($result);
    $email=$row['email'];
}else{
    $email='No email id found';
}}else{
    $email='Login to see your email';
}*/
$email=$_SESSION['email'];
$length=  strlen($email);
$font_size=4;
$image_height= imagefontheight($font_size);
$image_width= imagefontwidth($font_size)*$length;
$image=  imagecreate($image_width, $image_height);
imagecolorallocate($image, 255, 255, 255);
$font_color=  imagecolorallocate($image, 128,128,128);
imagestring($image, $font_size, 0, 0, $email, $font_color);
imagejpeg($image);
?>