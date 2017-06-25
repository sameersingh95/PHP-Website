<?php
header("Content-type:image/jpeg");
function thumbnail($src)
{
    $image=$src;
    
    $image_size=  getimagesize($image);
    $image_width=$image_size[0];
    $image_height=$image_size[1];
    
    $new_size=($image_width+$image_height)/($image_width*($image_height/45));
    $new_width=$image_width*$new_size;
    $new_height=$image_height*$new_size;
    
    $new_image=  imagecreatetruecolor($new_width, $new_height);
    $old_image=  imagecreatefromjpeg($image);
    
    imagecopyresized($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $image_width, $image_height);
    @$exten=  explode('.', $image);
    @$exname=$exten[0];
    imagejpeg($new_image,'thumbnails/'.$exname.'_th_'.$_SESSION['user_id'].'.jpg');
}
?>