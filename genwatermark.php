<?php
//include 'connect.php';
//global $conn;
header("Content-type:image/jpeg");
function addwatermark($image)
{
$source=$image;
$watermark=  imagecreatefrompng('css.png');
$watermark_width=  imagesx($watermark);
$watermark_height=  imagesy($watermark);

$final=  imagecreatetruecolor($watermark_width, $watermark_height);
$final=  imagecreatefromjpeg($source);

$image_size=  getimagesize($source);
$x=$image_size[0]-$watermark_width-10;
$y=$image_size[1]-$watermark_height-10;

imagecopymerge($final, $watermark, $x, $y, 0, 0, $watermark_width, $watermark_height, 20);
@$exten= explode('.', $image);
@$exname=$exten[0];
imagejpeg($final, 'uploads/'.$exname.'_wm_'.$_SESSION['user_id'].'.jpg');
}

?>